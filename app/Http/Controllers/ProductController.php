<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        Product::all();
        return view ('admin.productIndex');
    }

    public function create(Request $request){
        return view ('admin.create');
    }

    public function store(Request $request){

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
}
