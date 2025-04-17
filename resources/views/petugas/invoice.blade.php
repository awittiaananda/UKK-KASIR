@extends('layouts.app')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Penjualan</h4>
            <div class="card p-3">

                {{-- Tombol Unduh & Kembali --}}
                <div class="mb-3 d-flex justify-content-between">
                    <a href="#" class="btn btn-primary">Unduh</a>
                    <a href="#" class="btn btn-secondary">Kembali</a>
                </div>

                {{-- Info Member --}}
                <div class="mb-3">
                    <strong>Status Member: Member</strong><br>
                    <strong>0812-3456-7890</strong><br>
                    Member Sejak: 10 Januari 2023<br>
                    Member Poin: 120
                </div>

                {{-- Info Invoice --}}
                <div class="mb-3 text-end">
                    <strong>Invoice - #12345</strong><br>
                    16 April 2025
                </div>

                {{-- Tabel Produk --}}
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Quantity</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Produk A</td>
                            <td>Rp. 50.000</td>
                            <td>2</td>
                            <td>Rp. 100.000</td>
                        </tr>
                        <tr>
                            <td>Produk B</td>
                            <td>Rp. 25.000</td>
                            <td>1</td>
                            <td>Rp. 25.000</td>
                        </tr>
                    </tbody>
                </table>

                {{-- Ringkasan --}}
                <div class="row mt-4">
                    <div class="col">
                        <p><strong>POIN DIGUNAKAN</strong><br>20</p>
                    </div>
                    <div class="col">
                        <p><strong>KASIR</strong><br>Admin Toko</p>
                    </div>
                    <div class="col">
                        <p><strong>KEMBALIAN</strong><br>Rp. 5.000</p>
                    </div>
                    <div class="col text-end bg-dark text-white p-3 rounded">
                        <p><strong>TOTAL</strong><br>Rp. 125.000</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
