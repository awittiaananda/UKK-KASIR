<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Penjualan</title>

    <!-- plugins:css -->
<link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">

    <!-- Plugin css for this page -->
<link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/js/select.dataTables.min.css') }}">

<!-- inject:css -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<!-- endinject -->

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <div class="container-scroller">
    </div>
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <a class="navbar-brand brand-logo me-5" href="index.html"><img src="assets/images/logo.svg" class="me-2"
                    alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                    alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-search d-none d-lg-block">
                    <div class="input-group">
                        <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                            <span class="input-group-text" id="search">
                                <i class="icon-search"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                            aria-label="search" aria-describedby="search">
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                        data-bs-toggle="dropdown">
                        <i class="icon-bell mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="notificationDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="ti-info-alt mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                <p class="font-weight-light small-text mb-0 text-muted"> Just now </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="ti-settings mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">Settings</h6>
                                <p class="font-weight-light small-text mb-0 text-muted"> Private message </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="ti-user mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                <p class="font-weight-light small-text mb-0 text-muted"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                        <img src="assets/images/faces/face28.jpg" alt="profile" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="ti-settings text-primary"></i> Settings </a>
                        <a class="dropdown-item">
                            <i class="ti-power-off text-primary"></i> Logout </a>
                    </div>
                </li>
                <li class="nav-item nav-settings d-none d-lg-flex">
                    <a class="nav-link" href="#">
                        <i class="icon-ellipsis"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('petugas.index') }}">
                        <i class="mdi mdi-view-grid menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('petugas.product.index')}}">
                        <i class="mdi mdi-store menu-icon"></i>
                        <span class="menu-title">Product</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('petugas.penjualan') }}">
                        <i class="mdi mdi-basket menu-icon"></i>
                        <span class="menu-title">Pembelian</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Penjualan</h4>

                                <div class="d-flex justify-content-between mb-3">
                                    <a href="{{ url('/export-sales') }}" class="btn btn-primary">Export Penjualan (.xlsx)</a>
                                    <a href="{{ route('penjualan.produk') }}" class="btn btn-primary">Tambah Produk</a>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <form method="GET" id="perPageForm">
                                        <label>
                                            Tampilkan
                                            <select name="perPage" class="form-select d-inline w-auto mx-1" onchange="document.getElementById('perPageForm').submit();">
                                                <option value="10" {{ request('perPage') == 10 ? 'selected' : '' }}>10</option>
                                                <option value="25" {{ request('perPage') == 25 ? 'selected' : '' }}>25</option>
                                                <option value="50" {{ request('perPage') == 50 ? 'selected' : '' }}>50</option>
                                            </select>
                                            entri
                                        </label>
                                    </form>
                                    <div>
                                        Cari:
                                        <input type="text" class="form-control d-inline w-auto" style="width: 200px;">
                                    </div>
                                </div>

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
                                            @foreach ($penjualans as $key => $penjualan)
                                                <tr>
                                                    <td class="text-center">{{ $penjualans->firstItem() + $key }}</td>
                                                    <td>{{ $penjualan->pelanggan->nama ?? 'Non-member' }}</td>
                                                    <td class="text-center">{{ \Carbon\Carbon::parse($penjualan->tanggal)->format('Y-m-d') }}</td>
                                                    <td>Rp. {{ number_format($penjualan->total_harga, 0, ',', '.') }}</td>
                                                    <td>{{ $penjualan->user->name ?? '-' }}</td>
                                                    <td class="text-center">
                                                        <!-- Tombol Lihat -->
                                                        <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalPenjualan{{ $penjualan->id }}">
                                                            Lihat
                                                        </a>

                                                        <!-- Modal Detail -->
                                                        <div class="modal fade" id="modalPenjualan{{ $penjualan->id }}" tabindex="-1" aria-labelledby="detailPenjualanLabel{{ $penjualan->id }}" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Detail Penjualan</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="d-flex justify-content-between">
                                                                            <div>
                                                                                <p><strong>Member Status:</strong> {{ $penjualan->pelanggan->status ?? '-' }}</p>
                                                                                <p><strong>No. HP:</strong> {{ $penjualan->pelanggan->nomor_hp ?? '-' }}</p>
                                                                                <p><strong>Poin Member:</strong> {{ $penjualan->pelanggan->point ?? 0 }}</p>
                                                                            </div>
                                                                            <div>
                                                                                <p><strong>Bergabung Sejak:</strong>
                                                                                    {{ $penjualan->pelanggan ? $penjualan->pelanggan->created_at->format('d F Y') : '-' }}
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <table class="table mt-3">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Nama Produk</th>
                                                                                    <th>Qty</th>
                                                                                    <th>Harga</th>
                                                                                    <th>Sub Total</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($penjualan->penjualanDetails as $detail)
                                                                                    <tr>
                                                                                        <td>{{ $detail->product->name }}</td>
                                                                                        <td>{{ $detail->jumlah }}</td>
                                                                                        <td>Rp. {{ number_format($detail->harga, 0, ',', '.') }}</td>
                                                                                        <td>Rp. {{ number_format($detail->sub_total, 0, ',', '.') }}</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>

                                                                        <div class="text-end">
                                                                            <br>
                                                                            <h5>Total: <strong>Rp. {{ number_format($penjualan->total_harga, 0, ',', '.') }}</strong></h5>
                                                                        </div>

                                                                        <p class="text-muted mt-3">
                                                                            Dibuat pada: {{ $penjualan->created_at->format('Y-m-d H:i:s') }}<br>
                                                                            Oleh: {{ $penjualan->user->name ?? 'Petugas' }}
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="{{ route('penjualan.downloadPDF', $penjualan->id) }}" class="btn btn-primary btn-sm">Unduh Bukti</a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div>
                                            Menampilkan {{ $penjualans->firstItem() }} hingga {{ $penjualans->lastItem() }} dari {{ $penjualans->total() }} entri
                                        </div>
                                        <div>
                                            {{ $penjualans->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ 'assets/vendors/js/vendor.bundle.base.js' }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ 'assets/vendors/chart.js/chart.umd.js' }}"></script>
        <script src="{{ 'assets/vendors/datatables.net/jquery.dataTables.js' }}"></script>
        <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
        <script src="{{ 'assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js' }}"></script>
        <script src="{{ 'assets/js/dataTables.select.min.js' }}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ 'assets/js/off-canvas.js' }}"></script>
        <script src="{{ 'assets/js/template.js' }}"></script>
        <script src="{{ 'assets/js/settings.js' }}"></script>
        <script src="{{ 'assets/js/todolist.js' }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ 'assets/js/jquery.cookie.js' }}" type="text/javascript"></script>
        <script src="{{ 'assets/js/dashboard.js' }}"></script>
</body>
</html>
