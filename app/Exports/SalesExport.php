<?php

namespace App\Exports;

use App\Models\Penjualan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SalesExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * Mengambil data yang akan diekspor
     */
    public function collection()
    {
        // Ambil data penjualan beserta detailnya
        return Penjualan::with(['pelanggan', 'penjualanDetails.product'])->get();
    }

    /**
     * Menambahkan heading untuk kolom Excel
     */
    public function headings(): array
    {
        return [
            'Nama Pelanggan',
            'No HP Pelanggan',
            'Poin Pelanggan',
            'Produk',
            'Jumlah',
            'Harga',
            'Sub Total',
            'Total Harga',
            'Total Bayar',
            'Total Diskon',
            'Total Kembalian',
            'Tanggal Pembelian',
        ];
    }

    /**
     * Menentukan data yang akan dimasukkan pada setiap baris
     */
    public function map($penjualan): array
{
    $rows = [];

    $nama = $penjualan->pelanggan->nama ?? $penjualan->nama_pelanggan ?? 'Non Member';
    $nomor_hp = $penjualan->pelanggan->nomor_hp ?? '-';
    $point = $penjualan->pelanggan->point ?? 0;

    foreach ($penjualan->penjualanDetails as $detail) {
        $rows[] = [
            $nama,
            $nomor_hp,
            $point,
            $detail->product->name ?? 'Produk tidak tersedia',
            $detail->jumlah,
            $detail->harga,
            $detail->sub_total,
            $penjualan->total_harga,
            $penjualan->total_bayar,
            $penjualan->total_harga - $penjualan->total_bayar,
            $penjualan->kembalian,
            $penjualan->tanggal,
        ];
    }

    return $rows;
}


}
