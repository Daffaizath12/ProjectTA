<?php
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION["username"])) {
    header("Location: login.php"); // Jika tidak ada sesi username, redirect ke halaman login
    exit;
}

// Mengambil username dari sesi
$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="img/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="img/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Semangat Kerja, <span class="text-black fw-bold"><?php echo $username ?></span></h1>
            <h3 class="welcome-sub-text">PETTA TOUR & TRAVEL EXPRESS BANYUWANGI </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="img-xs rounded-circle profile-initials" id="profileInitials"></div></a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <p class="mb-1 mt-3 font-weight-semibold">Hi, <?php echo $username ?></p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">All Data</li>
          <li class="nav-item">
            <a class="nav-link" href="pemesanan.php">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Data Pemesanan</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="berangkat.php">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Data Keberangkatan</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="driver.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Data Driver</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pelanggan.php">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Data Pelanggan</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Logout</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Driver</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>No. Telp</th>
                          <th>Alamat Rumah</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>53275531</td>
                          <td>Jacob</td>
                          <td>082235623044</td>
                          <td>Jl. Raya Kedungwaru No.98, Kedungwaru, Kec. Banyuwangi</td>
                        </tr>
                        <tr>
                          <td>53275531</td>
                          <td>Messsy</td>
                          <td>081215643567</td>
                          <td>Bandung, Indonesia</td>
                        </tr>
                        <tr>
                          <td>53275531</td>
                          <td>John</td>
                          <td>+1 23456789410</td>
                          <td>London, UK</td>
                        </tr>
                        <tr>
                          <td>53275531</td>
                          <td>Peter</td>
                          <td>+1 61556689742</td>
                          <td>Ottawa, Canada</td>
                        </tr>
                        <tr>
                          <td>53275531</td>
                          <td>Dave</td>
                          <td>+1 555555555</td>
                          <td>Sidney, Australia</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Status Driver</h4>
                  <div class="table-responsive">
                    <table class="table select-table">
                      <thead>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex ">
                              <div>
                                <h6>Brandon Washington</h6>
                              </div>
                            </div>
                          </td>
                          <td><div class="badge badge-opacity-warning">In progress</div></td>
                        </tr>
                        <tr>
                          </td>
                          <td>
                            <div class="d-flex ">
                              <div>
                                <h6>Brandon Washington</h6>
                              </div>
                            </div>
                          </td>
                          <td><div class="badge badge-opacity-warning">In progress</div></td>
                        </tr>
                        <tr>
                          </td>
                          <td>
                            <div class="d-flex ">
                              <div>
                                <h6>Brandon Washington</h6>
                              </div>
                            </div>
                          </td>
                          <td><div class="badge badge-opacity-success">In progress</div></td>
                        </tr>
                        <tr>
                          </td>
                          <td>
                            <div class="d-flex ">
                              <div>
                                <h6>Brandon Washington</h6>
                              </div>
                            </div>
                          </td>
                          <td><div class="badge badge-opacity-danger">In progress</div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kelola Driver</h4>
                  <div class="table-responsive">
                    <table class="table table-Hover">
                      <thead>
                        <tr>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>No. Telp</th>
                          <th>Alamat</th>
                          <th>Status</th>
                          <th>Kelola</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>53275531</td>
                          <td>Jacob</td>
                          <td>082235623044</td>
                          <td>Jl. Raya Kedungwaru No.98, Kedungwaru, Kec. Banyuwangi</td>
                          <td><div class="badge badge-opacity-danger">In progress</div></td>
                          <td><i class="mdi mdi-account-multiple-plus"></i>Kelola</td> 
                        </tr>
                        <tr>
                          <td>53275531</td>
                          <td>Jacob</td>
                          <td>082235623044</td>
                          <td>Jl. Raya Kedungwaru No.98, Kedungwaru, Kec. Banyuwangi</td>
                          <td><div class="badge badge-opacity-danger">In progress</div></td>
                          <td><i class="mdi mdi-account-multiple-plus"></i>Kelola</td> 
                        </tr>
                        <tr>
                          <td>53275531</td>
                          <td>Jacob</td>
                          <td>082235623044</td>
                          <td>Jl. Raya Kedungwaru No.98, Kedungwaru, Kec. Banyuwangi</td>
                          <td><div class="badge badge-opacity-danger">In progress</div></td>
                          <td><i class="mdi mdi-account-multiple-plus"></i>Kelola</td> 
                        </tr>
                        <tr>
                          <td>53275531</td>
                          <td>Jacob</td>
                          <td>082235623044</td>
                          <td>Jl. Raya Kedungwaru No.98, Kedungwaru, Kec. Banyuwangi</td>
                          <td><div class="badge badge-opacity-danger">In progress</div></td>
                          <td><i class="mdi mdi-account-multiple-plus"></i>Kelola</td> 
                        </tr>
                        <tr>
                          <td>53275531</td>
                          <td>Jacob</td>
                          <td>082235623044</td>
                          <td>Jl. Raya Kedungwaru No.98, Kedungwaru, Kec. Banyuwangi</td>
                          <td><div class="badge badge-opacity-danger">In progress</div></td>
                          <td><i class="mdi mdi-account-multiple-plus"></i>Kelola</td> 
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
  // Mengambil nama pengguna dari sesi PHP
  fetch('get_username.php')
    .then(response => response.json())
    .then(data => {
      var name = data.username; // Sesuaikan dengan struktur data yang diambil dari sesi
      var initials = getInitials(name);
      document.getElementById('profileInitials').innerText = initials;
    })
    .catch(error => console.error('Error:', error));
});

function getInitials(name) {
  var names = name.split(' ');
  var initials = names[0].charAt(0).toUpperCase();
  if (names.length > 1) {
    initials += names[names.length - 1].charAt(0).toUpperCase();
  }
  return initials;
}
  </script>

  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

