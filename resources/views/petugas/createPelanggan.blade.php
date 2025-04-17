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
                                <div class="row">
                                    <div class="col-md-8">
                                      <h5 class="mb-3">Produk yang dipilih</h5>
                                      <div class="border rounded p-4">
                                        @foreach ($produkDipilih as $item)
                                          <div class="d-flex justify-content-between">
                                            <div>
                                              <strong>{{ $item['nama'] }}</strong><br>
                                              Rp. {{ number_format($item['harga'], 0, ',', '.') }} x {{ $item['jumlah'] }}
                                            </div>
                                            <div>
                                              <strong>Rp. {{ number_format($item['subtotal'], 0, ',', '.') }}</strong>
                                            </div>
                                          </div>
                                          <hr>
                                        @endforeach
                                        <div class="d-flex justify-content-between mt-3">
                                          <strong>Total</strong>
                                          <strong>Rp. {{ number_format($total, 0, ',', '.') }}</strong>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-md-4">
                                      <form action="{{ route('penjualan.review') }}" method="POST">
                                        @csrf
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


                                        {{-- <input type="hidden" id="totalHarga" value="{{ $total }}">
                                      <div class="mb-3">
                                        <label class="form-label">Total Bayar</label>
                                          <input type="text" class="form-control" id="totalBayar" name="total_bayar" placeholder="Rp. 0">
                                        <div class="text-danger mt-1 d-none" id="peringatanTotalBayarKurang">
                                          Jumlah bayar kurang dari total yang harus dibayar.
                                        </div>
                                        <div class="text-danger mt-1 d-none" id="peringatanTotalBayarLebih">
                                          Jumlah bayar melebihi total yang harus dibayar.
                                        </div>
                                      </div> --}}
                                      {{-- <input type="hidden" id="hiddenTotalBayar" name="total_bayar" value=""> --}}
<input type="hidden" id="totalHarga" value="{{ $total }}">
<div class="mb-3">
  <label class="form-label">Total Bayar</label>
  <input type="text" class="form-control" id="totalBayar" name="total_bayar" placeholder="Rp. 0">
  <div class="text-danger mt-1 d-none" id="peringatanTotalBayarKurang">
    Jumlah bayar kurang dari total yang harus dibayar.
  </div>
  {{-- <div class="text-danger mt-1 d-none" id="peringatanTotalBayarLebih">
    Jumlah bayar melebihi total yang harus dibayar.
  </div> --}}
</div>

                                        <button type="submit" class="btn btn-primary">Pesan</button>
                                      </form>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div> <!-- .col -->
                </div> <!-- .row -->
            </div> <!-- .content-wrapper -->
        </div> <!-- .main-panel -->
        <script>
          document.addEventListener("DOMContentLoaded", function () {
            const totalHarga = parseInt(document.getElementById('totalHarga').value);
            const inputBayar = document.getElementById('totalBayar');
            const peringatanKurang = document.getElementById('peringatanTotalBayarKurang');

            inputBayar.addEventListener('input', function () {
              let value = this.value.replace(/[^\d]/g, ''); // Hanya ambil angka
              let bayar = parseInt(value || 0);

              if (bayar < totalHarga) {
                peringatanKurang.classList.remove('d-none');
              } else if (bayar > totalHarga) {
                peringatanKurang.classList.add('d-none');
              } else {
                peringatanKurang.classList.add('d-none');
              }

              // Format dengaxn 'Rp.' dan pemisah ribuan
              this.value = 'Rp. ' + new Intl.NumberFormat('id-ID').format(bayar);
            });

            // Bersihkan nilai sebelum form disubmit
            document.querySelector("form").addEventListener("submit", function (event) {
              let totalBayar = inputBayar.value;

              // Bersihkan 'Rp.' dan titik pemisah ribuan
              totalBayar = totalBayar.replace('Rp. ', '').replace(/\./g, '');

              // Set nilai yang sudah dibersihkan ke input hidden
              document.getElementById('hiddenTotalBayar').value = totalBayar;
            });

            // Menampilkan atau menyembunyikan field nomor telepon sesuai dengan status
            const status = document.getElementById('statusMember');
            const teleponField = document.getElementById('teleponField');

            function toggleTeleponField() {
              if (status.value === 'member') {
                teleponField.style.display = 'block';
              } else {
                teleponField.style.display = 'none';
              }
            }

            // Jalankan saat halaman dimuat
            toggleTeleponField();

            // Jalankan saat status berubah
            status.addEventListener('change', toggleTeleponField);
          });
        </script>


        {{-- <script>
            document.addEventListener("DOMContentLoaded", function () {
              const totalHarga = parseInt(document.getElementById('totalHarga').value);
              const inputBayar = document.getElementById('totalBayar');
              const peringatanKurang = document.getElementById('peringatanTotalBayarKurang');
              const peringatanLebih = document.getElementById('peringatanTotalBayarLebih');

              inputBayar.addEventListener('input', function () {
                let value = this.value.replace(/[^\d]/g, '');
                let bayar = parseInt(value || 0);

                if (bayar < totalHarga) {
                  peringatanKurang.classList.remove('d-none');
                  peringatanLebih.classList.add('d-none');
                } else if (bayar > totalHarga) {
                  peringatanKurang.classList.add('d-none');
                  peringatanLebih.classList.remove('d-none');
                } else {
                  peringatanKurang.classList.add('d-none');
                  peringatanLebih.classList.add('d-none');
                }

                this.value = 'Rp. ' + new Intl.NumberFormat('id-ID').format(bayar);

              });
            });
          </script> --}}


          {{-- <script>
            document.addEventListener("DOMContentLoaded", function () {
  const totalHarga = parseInt(document.getElementById('totalHarga').value);
  const inputBayar = document.getElementById('totalBayar');
  const peringatanKurang = document.getElementById('peringatanTotalBayarKurang');
  const peringatanLebih = document.getElementById('peringatanTotalBayarLebih');

  inputBayar.addEventListener('input', function () {
    let value = this.value.replace(/[^\d]/g, ''); // Hanya ambil angka
    let bayar = parseInt(value || 0);

    if (bayar < totalHarga) {
      peringatanKurang.classList.remove('d-none');
      peringatanLebih.classList.add('d-none');
    } else if (bayar > totalHarga) {
      peringatanKurang.classList.add('d-none');
      peringatanLebih.classList.remove('d-none');
    } else {
      peringatanKurang.classList.add('d-none');
      peringatanLebih.classList.add('d-none');
    }

    // Format dengan 'Rp.' dan pemisah ribuan
    this.value = 'Rp. ' + new Intl.NumberFormat('id-ID').format(bayar);

  });

  // Bersihkan nilai sebelum form disubmit
  document.querySelector("form").addEventListener("submit", function(event) {
    let totalBayar = inputBayar.value;

    // Bersihkan 'Rp.' dan titik pemisah ribuan
    totalBayar = totalBayar.replace('Rp. ', '').replace(/\./g, '');

    // Set nilai yang sudah dibersihkan ke input
    document.getElementById('hiddenTotalBayar').value = totalBayar;
  });
});

  //           document.getElementById('statusMember').addEventListener('change', function () {
  //             const teleponField = document.getElementById('teleponField');
  //             // const form = document.getElementById('statusForm');
  //             const status = document.getElementById('statusMember');

  //             // Menampilkan atau menyembunyikan field nomor telepon sesuai dengan status
  //              // Menampilkan atau menyembunyikan field nomor telepon sesuai dengan status
  //   if (this.value === 'member') {
  //     teleponField.style.display = 'block';
  //   } else {
  //     teleponField.style.display = 'none';
  //   }

  //   status.addEventListener('change', function () {
  //   if (this.value === 'member') {
  //     teleponField.style.display = 'block';
  //   } else {
  //     teleponField.style.display = 'none';
  //   }
  // });
  //           });
          </script> --}}



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
