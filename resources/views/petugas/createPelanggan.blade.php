@extends('layouts.app')

@section('title', 'Penjualan')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Penjualan</h4>
        <div class="row">
          <div class="col-md-8">
            <h5 class="mb-3">Produk yang dipilih</h5>
            <div class="border rounded p-4">
              <!-- Contoh produk -->
              <div class="d-flex justify-content-between">
                <div>
                  <strong>Produk A</strong><br>
                  Rp. 25.000 x 2
                </div>
                <div>
                  <strong>Rp. 50.000</strong>
                </div>
              </div>
              <hr>
              <div class="d-flex justify-content-between">
                <div>
                  <strong>Produk B</strong><br>
                  Rp. 40.000 x 1
                </div>
                <div>
                  <strong>Rp. 40.000</strong>
                </div>
              </div>
              <hr>
  
              <div class="d-flex justify-content-between mt-3">
                <strong>Total</strong>
                <strong>Rp. 90.000</strong>
              </div>
            </div>
          </div>
  
          <div class="col-md-4">
            <form>
              <div class="mb-3">
                <label class="form-label">Member Status
                  <span class="text-danger" style="font-size: 12px;">Dapat juga membuat member</span>
                </label>
                <select id="statusMember" class="form-select" name="status">
                  <option value="non-member">Bukan Member</option>
                  <option value="member">Member</option>
                </select>
              </div>
  
              <div class="mb-3" id="teleponField" style="display: none;">
                <label class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" name="nomor_hp" placeholder="08xxxxxxxxxx">
              </div>
  
              <input type="hidden" id="totalHarga" value="90000">
  
              <div class="mb-3">
                <label class="form-label">Total Bayar</label>
                <input type="text" class="form-control" id="totalBayar" name="total_bayar" placeholder="Rp. 0">
                <div class="text-danger mt-1 d-none" id="peringatanTotalBayarKurang">
                  Jumlah bayar kurang dari total yang harus dibayar.
                </div>
                <!-- <div class="text-danger mt-1 d-none" id="peringatanTotalBayarLebih">
                  Jumlah bayar melebihi total yang harus dibayar.
                </div> -->
              </div>
  
              <button type="submit" class="btn btn-primary">Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>  
@endsection