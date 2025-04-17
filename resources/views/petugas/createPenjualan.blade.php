@extends('layouts.app')

@section('title', 'Penjualan')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Penjualan</h4>
        <form method="POST">
          <div class="row">
  
            <!-- Produk 1 -->
            <div class="col-md-4 mb-4">
              <div class="card h-100 shadow-sm text-center rounded-4 border">
                <div class="card-body">
                  <img src="path/to/image1.jpg" alt="Produk A" class="mb-3 object-fit-cover" style="width: 100px; height: 100px; object-fit: cover;">
                  <h5 class="fw-bold">Produk A</h5>
                  <p class="text-muted">Stok 10</p>
                  <p><strong>Rp. 25.000</strong></p>
  
                  <input type="hidden" name="produk[0][id]" value="1">
                  <div class="d-flex justify-content-center align-items-center mb-2 product-card" data-index="0" data-price="25000" data-stock="10">
                    <button type="button" class="btn btn-outline-secondary btn-sm qty-minus">−</button>
                    <input type="text" name="produk[0][jumlah]" class="form-control mx-2 quantity-input text-center" style="width: 60px;" value="0" min="0" readonly>
                    <button type="button" class="btn btn-outline-secondary btn-sm qty-plus">+</button>
                  </div>
                  <p>Sub Total <strong class="subtotal">Rp. 0</strong></p>
                </div>
              </div>
            </div>
  
            <!-- Produk 2 -->
            <div class="col-md-4 mb-4">
              <div class="card h-100 shadow-sm text-center rounded-4 border">
                <div class="card-body">
                  <img src="path/to/image2.jpg" alt="Produk B" class="mb-3 object-fit-cover" style="width: 100px; height: 100px; object-fit: cover;">
                  <h5 class="fw-bold">Produk B</h5>
                  <p class="text-muted">Stok 5</p>
                  <p><strong>Rp. 40.000</strong></p>
  
                  <input type="hidden" name="produk[1][id]" value="2">
                  <div class="d-flex justify-content-center align-items-center mb-2 product-card" data-index="1" data-price="40000" data-stock="5">
                    <button type="button" class="btn btn-outline-secondary btn-sm qty-minus">−</button>
                    <input type="text" name="produk[1][jumlah]" class="form-control mx-2 quantity-input text-center" style="width: 60px;" value="0" min="0" readonly>
                    <button type="button" class="btn btn-outline-secondary btn-sm qty-plus">+</button>
                  </div>
                  <p>Sub Total <strong class="subtotal">Rp. 0</strong></p>
                </div>
              </div>
            </div>
  
            <!-- Produk 3 -->
            <div class="col-md-4 mb-4">
              <div class="card h-100 shadow-sm text-center rounded-4 border">
                <div class="card-body">
                  <img src="path/to/image3.jpg" alt="Produk C" class="mb-3 object-fit-cover" style="width: 100px; height: 100px; object-fit: cover;">
                  <h5 class="fw-bold">Produk C</h5>
                  <p class="text-muted">Stok 20</p>
                  <p><strong>Rp. 15.000</strong></p>
  
                  <input type="hidden" name="produk[2][id]" value="3">
                  <div class="d-flex justify-content-center align-items-center mb-2 product-card" data-index="2" data-price="15000" data-stock="20">
                    <button type="button" class="btn btn-outline-secondary btn-sm qty-minus">−</button>
                    <input type="text" name="produk[2][jumlah]" class="form-control mx-2 quantity-input text-center" style="width: 60px;" value="0" min="0" readonly>
                    <button type="button" class="btn btn-outline-secondary btn-sm qty-plus">+</button>
                  </div>
                  <p>Sub Total <strong class="subtotal">Rp. 0</strong></p>
                </div>
              </div>
            </div>
  
          </div>
  
          <!-- Tombol Selanjutnya -->
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary px-5">Selanjutnya</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
@endsection