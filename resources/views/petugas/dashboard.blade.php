@extends('layouts.app')

@section('title', 'Dashboard Petugas')

@section('content')
<div class="col-md-12 grid-margin">
    <div class="row">
        <div class="p-6">
            <h1 class="text-xl font-semibold mb-4">Selamat Datang, Petugas!</h1>

            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                {{-- Header --}}
                <div class="bg-gray-100 text-center py-3 text-sm text-gray-600 font-medium">
                    Total Penjualan Hari Ini
                </div>

                {{-- Body --}}
                <div class="py-10 text-center">
                    <div class="text-3xl font-bold text-gray-800">
                        25 Transaksi
                    </div>
                    <div class="text-sm text-gray-600 mt-2">
                        Jumlah total penjualan yang terjadi hari ini.
                    </div>
                </div>

                {{-- Footer --}}
                <div class="bg-gray-100 text-center py-2 text-xs text-gray-500">
                    Terakhir diperbarui: 16 Apr 2025 14:30
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
