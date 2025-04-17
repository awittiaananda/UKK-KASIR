@extends('layouts.app')

@section('title', 'MEMBER')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Penjualan</h4>
            <form>
                <div class="row border rounded p-4">
                    <!-- Tabel Produk -->
                    <div class="col-md-7">
                        <div class="border p-3">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>Qty</th>
                                        <th>Harga</th>
                                        <th>Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="mt-3 d-flex justify-content-between">
                                <strong>Total Harga</strong>
                                <strong>Rp. 175.000</strong>
                            </div>

                            <div class="d-flex justify-content-between">
                                <strong>Total Bayar</strong>
                                <strong>Rp. 175.000</strong>
                            </div>

                            <input type="hidden" id="totalHarga" value="175000">
                        </div>
                    </div>

                    <!-- Form Member -->
                    <div class="col-md-5">

                        <input type="hidden" name="nomor_hp" value="08xxxxxxx">
                        <div class="mb-3">
                            <label class="form-label">Nama Member (identitas)</label>
                            <input type="text" id="nama_member" class="form-control" name="nama_member" placeholder="nama member" value="Budi Santoso">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Poin</label>
                            <input type="text" class="form-control bg-light" name="point" value="0" readonly>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="gunakanPoin" disabled>
                            <label class="form-check-label" for="gunakanPoin">
                                Gunakan poin
                            </label>
                            <div class="form-text text-danger">Poin tidak dapat digunakan pada pembelanjaan pertama.</div>
                        </div>

                        <button type="submit" class="btn btn-primary">Selanjutnya</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection