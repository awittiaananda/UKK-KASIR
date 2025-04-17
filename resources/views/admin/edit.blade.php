@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Produk</h4>
      <form class="forms-sample">
        <div class="row mb-4">
          <!-- Nama Produk -->
          <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-label">Nama Produk <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
          </div>
          <!-- Gambar Produk -->
          <div class="col-md-6">
            <div class="form-group">
              <label>Gambar Produk</label>
              <input type="file" class="form-control">
            </div>
          </div>
        </div>

        <div class="row mb-4">
          <!-- Harga -->
          <div class="col-md-6">
            <div class="form-group">
                <label for="harga" class="form-label">Harga <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>
          </div>
          <!-- Stok -->
          <div class="col-md-6">
            <div class="form-group">
                <label for="stock" class="form-label">Stok<span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary me-2">Simpan</button>
      </form>
    </div>
  </div>
</div>
@endsection
