<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $role = auth()->user()->role ?? null;

        if ($role === 'admin') {
            return view('admin.productIndex', ['products' => Product::all()]);
        } elseif ($role === 'employee') {
            return view('petugas.product', ['products' => Product::all()]);
        }

        return abort(403, 'Unauthorized');
    }

    public function create(Request $request){
        if (auth()->user()->role !== 'admin') {
            return abort(403, 'unauthorized');
        }

        return view ('admin.create');
    }

    public function store(Request $request)
    {
        if (Auth::user()?->role !== 'admin') {
            return abort(403, 'unauthorized');
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imagePath,
        ]);

        return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan!');
    }


    public function edit($id){
        $product = Product::findOrFail($id);

if (Auth::user()?->role !== 'admin') {
    return abort(403, 'unauthorized');
}

    return view('admin.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()?->role !== 'admin') {
            return abort(403, 'unauthorized');
        }

        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Jika ada gambar baru, simpan
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        } else {
            $imagePath = $product->image;
        }

        // Update produk
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('product.index')->with('success', 'Produk berhasil diperbarui!');
    }


    public function updateStock(Request $request, $id){
        if (Auth::user()?->role !== 'admin') {
            return abort(403, 'unauthorized');
        }

        $request->validate([
            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::findOrFail($id);
        $product->stock = $request->stock;
        $product->save();

        return response()->json(['success' => true, 'message' => 'Stok berhasil diperbarui!']);
    }

    public function destroy($id){
        if (Auth::user()?->role !== 'admin') {
            return abort(403, 'unauthorized');
        }

        try {
            $product = Product::findOrFail($id);
            $product->delete();

            return response()->json(['success' => true, 'message' => 'Produk berhasil dihapus!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
        }
    }
