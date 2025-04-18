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
            <a class="navbar-brand brand-logo me-5" href="{{ url('index.html') }}">
                <img src="{{ asset('assets/images/logo.svg') }}" class="me-2" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ url('index.html') }}">
                <img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" />
            </a>
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
                        <img src="{{ asset('assets/images/faces/face28.jpg') }}" alt="profile" />
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
                    <a class="nav-link" href="#">
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
                                <form action="{{ route('penjualan.pelanggan') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        @foreach ($products as $index => $product)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm text-center rounded-4 border">
            <div class="card-body">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="mb-3 object-fit-cover" style="width: 100px; height: 100px; object-fit: cover;">
                <h5 class="fw-bold">{{ $product->name }}</h5>
                <p class="text-muted">Stok {{ $product->stock }}</p>
                <p><strong>Rp. {{ number_format($product->price, 0, ',', '.') }}</strong></p>

                {{-- Input untuk produk dan jumlah --}}
                <input type="hidden" name="produk[{{ $index }}][id]" value="{{ $product->id }}">
                <div class="d-flex justify-content-center align-items-center mb-2 product-card" data-index="{{ $index }}" data-price="{{ $product->price }}" data-stock="{{ $product->stock }}">
                    <button type="button" class="btn btn-outline-secondary btn-sm qty-minus">−</button>

                    <input type="text" name="produk[{{ $index }}][jumlah]" class="form-control mx-2 quantity-input text-center" style="width: 60px;" value="0" min="0" readonly>

                    <button type="button" class="btn btn-outline-secondary btn-sm qty-plus">+</button>
                </div>

                <p>Sub Total <strong class="subtotal">Rp. 0</strong></p>
            </div>
        </div>
    </div>
@endforeach

                                    </div>

                                    {{-- Tombol Selanjutnya --}}
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary px-5">Selanjutnya</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- .col -->
                </div> <!-- .row -->
            </div> <!-- .content-wrapper -->
        </div> <!-- .main-panel -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const cards = document.querySelectorAll('.product-card');

                cards.forEach(card => {
                    const btnMinus = card.querySelector('.qty-minus');
                    const btnPlus = card.querySelector('.qty-plus');
                    const qtyInput = card.querySelector('.quantity-input');
                    const subtotalEl = card.parentElement.querySelector('.subtotal');

                    const price = parseInt(card.dataset.price);
                    const stock = parseInt(card.dataset.stock);

                    // Ambil nilai awal dari input
                    let quantity = parseInt(qtyInput.value);

                    btnPlus.addEventListener('click', () => {
                        if (stock < 0 || stock === 999999 || quantity < stock) {
                            quantity++;
                            updateUI();
                        }
                    });

                    btnMinus.addEventListener('click', () => {
                        if (quantity > 0) {
                            quantity--;
                            updateUI();
                        }
                    });

                    function updateUI() {
                        qtyInput.value = quantity;
                        subtotalEl.textContent = 'Rp. ' + (quantity * price).toLocaleString('id-ID');
                    }
                });
            });
        </script>


        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ 'assets/vendors/js/vendor.bundle.base.js' }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ 'assets/vendors/chart.js/chart.umd.js' }}"></script>
        <script src="{{ 'assets/vendors/datatables.net/jquery.dataTables.js' }}"></script>
        <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
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
