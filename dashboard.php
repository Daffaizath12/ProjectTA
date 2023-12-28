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
            <a class="nav-link" href="dashboard.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Pengguna</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Pengguna</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pelanggan.php">Pelanggan</a></li>
                <li class="nav-item"> <a class="nav-link" href="sopir.php">Sopir</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Forms and Datas</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Pemesanan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pemesanan.php">Data Pemesanan</a></li>
                <li class="nav-item"><a class="nav-link" href="pemesanan.php">Detail Pemesanan</a></li>
                <li class="nav-item"><a class="nav-link" href="pemesanan.php">Riwayat Pemesanan</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Data Perjalanan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="jurusan.php">Daftar Perjalanan</a></li>
                <li class="nav-item"><a class="nav-link" href="armada.php">Data Armada</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Rute Perjalanan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Daftar Node</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Rute Tercepat</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Galeri</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Tambah Artiket</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Logout</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Logout</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#"> Logout </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Daftar Resevasi</h4>
                                  </div>
                                  <div>
                                    <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-apps"></i>Selengkapnya</button>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>Customer</th>
                                        <th>tanggal</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <div>
                                              <h6>Brandon Washington</h6>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <div>
                                            <h6>22-01-2023</h6><!-- Ganti dengan format tanggal yang sesuai -->
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                        <td>
                                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailModal">
                                            <i class="mdi mdi-account-card-details"></i>Detail
                                          </button>
                                        </td>
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
                                        <td>
                                          <div>
                                            <h6>22-01-2023</h6><!-- Ganti dengan format tanggal yang sesuai -->
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-warning">In progress</div></td>
                                        <td>
                                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailModal">
                                            <i class="mdi mdi-account-card-details"></i>Detail
                                          </button>
                                        </td>
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
                                        <td>
                                          <div>
                                            <h6>22-01-2023</h6><!-- Ganti dengan format tanggal yang sesuai -->
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-success">In progress</div></td>
                                        <td>
                                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailModal">
                                            <i class="mdi mdi-account-card-details"></i>Detail
                                          </button>
                                        </td>
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
                                        <td>
                                          <div>
                                            <h6>22-01-2023</h6><!-- Ganti dengan format tanggal yang sesuai -->
                                          </div>
                                        </td>
                                        <td><div class="badge badge-opacity-danger">In progress</div></td>
                                        <td>
                                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailModal">
                                            <i class="mdi mdi-account-card-details"></i>Detail
                                          </button>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-md-4 col-lg-4">
                            <div class="card card-rounded">
                              <div class="card-body card-rounded">
                                <h4 class="card-title  card-title-dash">Riwayat Pemesanan</h4>
                                <div class="table-responsive">
                                  <table class="table table-hover">
                                    <thead>
                                      <tr>
                                          <th>Nama Lengkap</th>
                                          <th>Tanggal Pemesanan</th>
                                          <th>Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                      <td>Jacob</td>
                                      <td>12 May 2017</td>
                                      <td><label class="badge badge-success">Completed</label></td>
                                      </tr>
                                      <tr>
                                      <td>Messsy</td>
                                      <td>15 May 2017</td>
                                      <td><label class="badge badge-success">Completed</label></td>
                                      </tr>
                                      <td>John</td>
                                      <td>14 May 2017</td>
                                      <td><label class="badge badge-danger">Incompleted</label></td>
                                      </tr>
                                      <tr>
                                      <td>Peter</td>
                                      <td>16 May 2017</td>
                                        <td><label class="badge badge-success">Completed</label></td>
                                      </tr>
                                      <tr>
                                      <td>Dave</td>
                                      <td>20 May 2017</td>
                                        <td><label class="badge badge-success">Completed</label></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0">
                                      <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 col-lg-4">
                            <div class="card card-rounded">
                              <div class="card-body card-rounded">
                                <h4 class="card-title  card-title-dash">Riwayat Keberangkatan</h4>
                                <div class="table-responsive">
                                  <table class="table table-hover">
                                    <thead>
                                      <tr>
                                          <th>Nama Lengkap</th>
                                          <th>Tanggal Berangkat</th>
                                          <th>Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                      <td>Jacob</td>
                                      <td>12 May 2017</td>
                                      <td><label class="badge badge-success">Completed</label></td>
                                      </tr>
                                      <tr>
                                      <td>Messsy</td>
                                      <td>15 May 2017</td>
                                      <td><label class="badge badge-success">Completed</label></td>
                                      </tr>
                                      <td>John</td>
                                      <td>14 May 2017</td>
                                      <td><label class="badge badge-danger">Incompleted</label></td>
                                      </tr>
                                      <tr>
                                      <td>Peter</td>
                                      <td>16 May 2017</td>
                                        <td><label class="badge badge-success">Completed</label></td>
                                      </tr>
                                      <tr>
                                      <td>Dave</td>
                                      <td>20 May 2017</td>
                                        <td><label class="badge badge-success">Completed</label></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0">
                                      <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 col-lg-4">
                            <div class="card card-rounded">
							                <div class="card-body card-rounded">
                                <h4 class="card-title  card-title-dash">Status Driver</h4>
                                <div class="table-responsive  mt-1">
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
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0">
                                      <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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

