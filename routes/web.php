<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PenjualanController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard.index');

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::put('/product/{id}/update-stock', [ProductController::class, 'updateStock'])->name('admin.stock');
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    Route::middleware(['auth', 'role:employee'])->group(function () {
    Route::get('/petugas', [PenjualanController::class, 'dashboard'])->name('petugas.index');
    Route::get('/petugas/products', [ProductController::class, 'index'])->name('petugas.product.index');
    Route::get('/penjualan', [PenjualanController::class, 'index'])->name('petugas.penjualan');
    Route::get('/penjualan/produk', [PenjualanController::class, 'pilihProduk'])->name('penjualan.produk');
    Route::post('/penjualan/pelanggan', [PenjualanController::class, 'inputPelanggan'])->name('penjualan.pelanggan');
    Route::post('/penjualan/review', [PenjualanController::class, 'store'])->name('penjualan.review');
    Route::post('penjualan/member', [PenjualanController::class, 'storePenjualan'])->name('penjualan.index');
    Route::post('/penjualan/simpan', [PenjualanController::class, 'simpan'])->name('penjualan.simpan');

    Route::get('/penjualan/download/{id}', [PenjualanController::class, 'downloadPDF'])->name('penjualan.downloadPDF');
    Route::get('/export-sales', [PenjualanController::class, 'exportSales']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/dashboard/petugas', function () {
//     return view('petugas.dashboard');
// })->middleware(['auth', 'verified'])->name('petugas.index');

// Route::middleware(['auth', 'role:employee'])->group(function () {
//     Route::get('/petugas/dashboard', function () {
//         return view('petugas.dashboard');
//     })->name('petugas.index');
// Route::middleware(['auth', 'role:employee'])->group(function () {
//     Route::get('/petugas', [PenjualanController::class, 'dashboard'])->name('petugas.index');


// Route::get('/petugas/dashboard', function () {
//     return view('petugas.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard.petugas');

Route::middleware('auth')->post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';

