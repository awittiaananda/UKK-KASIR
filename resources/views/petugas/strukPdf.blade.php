<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        .table-header {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .right {
            text-align: right;
        }
    </style>
</head>
<body>
    <h4>SkyStore</h4>
    <p>
        Member Status: {{ $penjualan->status_member ? 'Member' : 'Non Member' }}<br>
        No. HP: {{ $penjualan->pelanggan->nomor_hp ?? '-' }}<br>
        Bergabung Sejak:
        {{ $penjualan->pelanggan
            ? \Carbon\Carbon::parse($penjualan->pelanggan->created_at)->format('d F Y')
            : '-' }}<br>
                Poin Member: {{ $penjualan->pelanggan->point ?? 0 }}
    </p>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead class="table-header">
            <tr>
                <th>Nama Produk</th>
                <th>QTY</th>
                <th>Harga</th>
                <th>Sub Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan->penjualanDetails as $detail)
                <tr>
                    <td>{{ $detail->product->nama ?? 'Produk' }}</td>
                    <td class="right">{{ $detail->jumlah }}</td>
                    <td class="right">Rp. {{ number_format($detail->harga, 0, ',', '.') }}</td>
                    <td class="right">Rp. {{ number_format($detail->sub_total, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <table width="100%">
        <tr>
            <td>Total Harga</td>
            <td class="right"><strong>Rp. {{ number_format($penjualan->total_harga, 0, ',', '.') }}</strong></td>
        </tr>
        @if ($penjualan->pelanggan && $penjualan->pelanggan->point > 0)
            <tr>
                <td>Poin Digunakan</td>
                <td class="right">{{ $penjualan->pelanggan->point }}</td>
            </tr>
        @endif
        <tr>
            <td>Harga Setelah Poin</td>
            <td class="right"><strong>Rp. {{ number_format($penjualan->total_bayar, 0, ',', '.') }}</strong></td>
        </tr>
        <tr>
            <td>Total Kembalian</td>
            <td class="right"><strong>Rp. {{ number_format($penjualan->kembalian, 0, ',', '.') }}</strong></td>
        </tr>
    </table>

    <br>
    <small>{{ $penjualan->tanggal }} | {{ $penjualan->user->name ?? 'Petugas' }}</small>
    <p><strong>Terima kasih atas pembelian Anda!</strong></p>
</body>
</html>
