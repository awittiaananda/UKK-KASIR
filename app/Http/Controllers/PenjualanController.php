<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Penjualan;
use App\Models\PenjualanDetail;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SalesExport;




class PenjualanController extends Controller
{

    public function index()
    {

        $penjualans = Penjualan::with('pelanggan')->latest()->paginate(10);
        $perPage = request('perPage', 10); // default 10
        $penjualans = Penjualan::paginate($perPage);
        return view('petugas.penjualan', compact('penjualans'));
    }

    public function dashboard()
{
    $jumlahPenjualanHariIni = Penjualan::whereDate('tanggal', Carbon::today())->count();

    $terakhirDiperbarui = Carbon::now()->format('d M Y H:i');

    return view('petugas.dashboard', [
        'jumlahPenjualanHariIni' => $jumlahPenjualanHariIni,
        'terakhirDiperbarui' => $terakhirDiperbarui,
    ]);
}
    // 1. Halaman pilih produk
    public function pilihProduk()
    {
        $products = Product::where('stock', '>', 0)->get();
        return view('petugas.createPenjualan', compact('products'));
    }

    // 2. Proses produk & tampil form pelanggan
    public function inputPelanggan(Request $request)
{
    // Ambil hanya produk yang jumlahnya lebih dari 0
    $produkDipilih = collect($request->produk)->filter(fn($p) => $p['jumlah'] > 0);

    if ($produkDipilih->isEmpty()) {
        return back()->with('error', 'Pilih minimal satu produk');
    }

    $total = 0;
    $produkData = [];

    foreach ($produkDipilih as $item) {
        $produk = Product::find($item['id']);

        if (!$produk) {
            return back()->withErrors(['Produk tidak ditemukan']);
        }

        $subtotal = $produk->price * $item['jumlah'];

        $produkData[] = [
            'id' => $produk->id,
            'nama' => $produk->name,
            'harga' => $produk->price,
            'jumlah' => $item['jumlah'],
            'subtotal' => $subtotal,
        ];

        $total += $subtotal;
    }

    session(['produk_dipilih' => $produkData, 'total_harga' => $total]);

    return view('petugas.createPelanggan', [
        'produkDipilih' => $produkData,
        'total' => $total,
    ]);
}


//     public function store(Request $request)
// {
//     $produkData = json_decode($request->produk_data, true);
//     // $kembalian = $request->total_bayar - $request->total_harga;

//     $pelangganId = null;

//     if ($request->status === 'member') {
//         $pelanggan = Pelanggan::firstOrCreate(
//             ['nomor_hp' => $request->nomor_hp],
//             ['nama' => 'Member Baru', 'poin' => 0]
//         );
//         $pelangganId = $pelanggan->id;
//     }

//     $penjualan = Penjualan::create([
//         'tanggal_penjualan' => now(),
//         'status' => $request->status,
//         'no_telp' => $request->nomor_hp,
//         'total_bayar' => $request->total_bayar,
//         'total_harga' => $request->total_harga,
//         // 'kembalian' => $kembalian,
//         'user_id' => auth()->id(),
//         'pelanggan_id' => $pelangganId,
//     ]);

//     foreach ($produkData as $item) {
//         DetailPenjualan::create([
//             'penjualan_id' => $penjualan->id,
//             'produk_id' => $item['id'],
//             'qty' => $item['jumlah'],
//             'harga' => $item['harga'],
//             'subtotal' => $item['jumlah'] * $item['harga'],
//         ]);
//     }

//     // kalau non-member, langsung ke halaman print
//     if ($request->status === 'non-member') {
//         return view('petugas.detailPrint', [
//             'invoiceId' => $penjualan->id,
//             'tanggal' => $penjualan->tanggal_penjualan,
//             'produkData' => $produkData,
//             'totalHarga' => $request->total_harga,
//             // 'kembalian' => $kembalian
//         ]);
//     }

//     // kalau member, setelah simpan redirect balik ke halaman index
//     return redirect()->route('penjualan.index')->with('success', 'Transaksi berhasil dan member disimpan!');
// }
////////////////////


public function store(Request $request)
{

    $produkDipilih = session('produk_dipilih');
    $total = session('total_harga');

    $totalBayar = str_replace(['Rp. ', '.'], '', $request->total_bayar);
    $request->merge(['total_bayar' => $totalBayar]);

    $request->validate([
        'status' => 'required|in:member,non-member',
        'nomor_hp' => 'required_if:status,member',
        'total_bayar' => 'required|numeric|min:' . $total,
    ]);

    $pelanggan = null;
    if ($request->status == 'member') {
        $pelanggan = Pelanggan::where('nomor_hp', $request->nomor_hp)->first();

        // Menampilkan form createMember langsung tanpa redirect
        return view('petugas.createMember', [
            'pelanggan' => $pelanggan,  // Bisa kamu tambahkan data apa pun yang diperlukan di sini
            'total' => $total,
            'produkDipilih' => $produkDipilih, // Misalnya kamu ingin menunjukkan totalnya
        ]);
    }

    // Hitung kembalian
    $kembalian = (int) $totalBayar - (int) $total;

    DB::beginTransaction();
    try {
        // Simpan ke tabel penjualans
        $penjualan = Penjualan::create([
            'pelanggan_id' => optional($pelanggan)->id,
            'total' => $total,
            'total_bayar' => $totalBayar,
            'kembalian' => $kembalian,
            'user_id' => Auth::id(),
            'tanggal' => now(), // <-- WAJIB diisi karena di DB kolom ini tidak nullable
        ]);

        // Simpan ke detail_penjualans
        foreach ($produkDipilih as $item) {
            PenjualanDetail::create([
                'penjualan_id' => $penjualan->id,
                'product_id' => $item['id'],
                'jumlah' => $item['jumlah'],
                'harga' => $item['harga'],
                'sub_total' => $item['harga'] * $item['jumlah'],
            ]);
        }

        DB::commit();

        // Redirect ke halaman cetak/preview
        return view('petugas.detailPrint', [
            'penjualan' => $penjualan
        ]);

    } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('error', 'Terjadi kesalahan saat menyimpan penjualan: ' . $e->getMessage());
    }
}


    public function simpan(Request $request)
{
    $produkDipilih = session('produk_dipilih');
    $total = session('total_harga', 0);
    $pelanggan_id = session('pelanggan_id');
    $totalBayar = session('total_bayar');

    DB::beginTransaction();
    $point = 0;

    try {
        if (!$pelanggan_id && $request->filled('nama_member')) {
            $pelanggan = Pelanggan::where('nomor_hp', $request->nomor_hp)->first();

            if (!$pelanggan) {
                $pelanggan = Pelanggan::create([
                    'nama' => $request->nama_member,
                    'nomor_hp' => $request->nomor_hp,
                    'point' => 0,
                    'status' => 'member', // <-- Tambahkan ini
                ]);
            } else {
                if ($pelanggan->status !== 'member') {
                    $pelanggan->status = 'member';
                    $pelanggan->save();
                }
            }
            session(['pelanggan_id' => $pelanggan->id]);
            $pelanggan_id = $pelanggan->id;
        }

        $user_id = auth()->id();
        $pelanggan = $pelanggan_id ? Pelanggan::find($pelanggan_id) : null;

        $jumlahTransaksi = 0;
        if ($pelanggan) {
            $jumlahTransaksi = Penjualan::where('pelanggan_id', $pelanggan->id)->count();
        }

        // Cek apakah point akan digunakan
        $pointDipakai = 0;
        if ($pelanggan && $jumlahTransaksi > 0 && $request->has('use_point')) {
            $pointDipakai = min($pelanggan->point, $total);
            $total -= $pointDipakai;
        }

        $penjualan = Penjualan::create([
            'tanggal' => Carbon::now(),
            'pelanggan_id' => $pelanggan_id,
            'total_harga' => $total,
            'user_id' => $user_id,  // Menambahkan user_id

        ]);

        foreach ($produkDipilih as $item) {
            // Cek apakah produk ada di database
            $produk = Product::find($item['id']);

            if (!$produk) {
                throw new \Exception('Produk dengan ID ' . $item['id'] . ' tidak ditemukan.');
            }

            // Cek apakah harga produk ada
            $price = $produk->price;

            if (is_null($price)) {
                throw new \Exception('Harga produk tidak ditemukan untuk ' . $produk->nama);
            }

            if ($produk->stock < $item['jumlah']) {
                throw new \Exception('Stock tidak cukup untuk ' . $produk->nama);
            }

            // Update stok produk
            $produk->stock -= $item['jumlah'];
            $produk->save();

            // Simpan detail penjualan
            PenjualanDetail::create([
                'penjualan_id' => $penjualan->id,
                'product_id' => $produk->id,
                'jumlah' => $item['jumlah'],
                'harga' => $price,
                'total_harga' => $total,
                'sub_total' => $price * $item['jumlah'],
            ]);
        }

        if ($pelanggan_id) {
            $pelanggan = Pelanggan::find($pelanggan_id);
            $penjualanSebelumnya = Penjualan::where('pelanggan_id', $pelanggan_id)->count();

            if ($penjualanSebelumnya > 1) {
                $point = intval($total * 0.01);
                $pelanggan->point += $point;
                $pelanggan->save();
            } else {
                $point = 0;
            }
        }

        DB::commit();
        session()->forget(['produk_dipilih', 'total_harga', 'pelanggan_id', 'total_bayar']);

        return view('petugas.detailPrint', [
            'penjualan' => $penjualan,
            'point' => $point,
            'total_point' => $pelanggan->point ?? 0,
            'jumlahTransaksi' => $jumlahTransaksi,
            'total' => $total,
        ]);

    } catch (\Exception $e) {
        DB::rollback();
        dd('Error:', $e->getMessage());
        return back()->with('error', 'Gagal simpan: ' . $e->getMessage());
    }
}

public function downloadPDF($id)
{
    $penjualan = Penjualan::with(['pelanggan', 'penjualanDetails.product', 'user'])->findOrFail($id);

    $pdf = Pdf::loadView('petugas.StrukPdf', compact('penjualan'));
    return $pdf->download('struk-penjualan-'.$penjualan->id.'.pdf');
}

public function exportSales()
    {
        return Excel::download(new SalesExport, 'penjualan.xlsx');
    }

    public function lihat($id)
    {
        $penjualan = Penjualan::with(['detailPenjualans.product', 'pelanggan'])->findOrFail($id);
        return view('penjualan.lihat', compact('penjualan'));
    }

    public function export()
    {
        return back()->with('info', 'Fitur export belum diaktifkan');
    }
}
