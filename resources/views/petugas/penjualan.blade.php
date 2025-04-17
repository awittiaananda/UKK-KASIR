@extends('layouts.app')

@section('title', 'Product')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Penjualan</h4>
            <div class="d-flex justify-content-between mb-3">
                <button class="btn btn-primary">Export Penjualan (.xlsx)</button>
                <a href="#" class="btn btn-primary">Tambah Produk</a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal Penjualan</th>
                            <th>Total Harga</th>
                            <th>Dibuat Oleh</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="d-flex gap-2">
                                <a href="#" class="btn btn-warning">Lihat</a>
                                <a href="#" class="btn btn-primary">Unduh Bukti</a>
                            </td>                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection