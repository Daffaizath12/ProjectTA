<?php
include "koneksi.php";

// Proses penghapusan data sopir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["action"]) && $_POST["action"] == "delete" && isset($_POST["id_sopir"])) {
      $id_sopir = $_POST["id_sopir"];

      // Query DELETE
      $sql = "DELETE FROM sopir WHERE id_sopir='$id_sopir'";

      // Eksekusi query
      if ($conn->query($sql) === TRUE) {
          $isSuccess = true;
      }
  }
}

session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION["username"])) {
    header("Location: login.php"); // Jika tidak ada sesi username, redirect ke halaman login
    exit;
}

// Menampilkan pesan jika ada
if (isset($_SESSION['pesan'])) {
    echo "<p>{$_SESSION['pesan']}</p>";
    unset($_SESSION['pesan']); // Hapus pesan setelah ditampilkan
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
  <!-- icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xrZ12XNDSm6ZuAu0GzNPgA/0p9LpfbjqLXPde3d/+2I02wcDJG3QeBAA+QvwtuIQreIV9fsAgXtRs2e+1kA+dQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <li class="nav-item"> <a class="nav-link" href="driver.php">Sopir</a></li>
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
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Sopir</h4>
                  <a href="tambah-sopir.php"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahSopirModal">Tambah Sopir</button></a>
                  <div class="table-responsive">
                    <table class="table table-Hover">
                      <thead>
                        <tr>
                          <th>Nama Lengkap</th>
                          <th>No. SIM</th>
                          <th>No. Telp</th>
                          <th>Alamat</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        // Ambil data sopir dari database dan tampilkan
                        // Gantilah ini dengan kueri sesuai struktur tabel dan database Anda
                        $sql = "SELECT * FROM sopir";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                              echo "<tr>";
                              echo "<td>" . $row["nama_lengkap"] . "</td>";
                              echo "<td>" . $row["no_SIM"] . "</td>";
                              echo "<td>" . $row["notelp"] . "</td>";
                              echo "<td>" . $row["alamat"] . "</td>";
                              echo "<td>";
                              echo "<button onclick=\"window.location.href='edit-sopir.php?id_sopir=" . $row["id_sopir"] . "'\" class='badge btn-primary'>Edit</button>";
                              echo "<button class='badge btn-danger' data-bs-toggle='modal' data-bs-target='#hapusModal" . $row['id_sopir'] . "'>Hapus</button>";
                              echo "</td>";
                              echo "</tr>";

                              // Modal Konfirmasi Hapus
                              echo "<div class='modal fade' id='hapusModal" . $row['id_sopir'] . "' tabindex='-1' role='dialog' aria-labelledby='hapusModalLabel' aria-hidden='true'>";
                              echo "<div class='modal-dialog' role='document'>";
                              echo "<div class='modal-content'>";
                              echo "<div class='modal-header'>";
                              echo "<h5 class='modal-title' id='hapusModalLabel'>Konfirmasi Hapus</h5>";
                              echo "<button type='button' class='close' data-bs-dismiss='modal' aria-label='Close'>";
                              echo "<span aria-hidden='true'>&times;</span>";
                              echo "</button>";
                              echo "</div>";
                              echo "<div class='modal-body'>";
                              echo "Apakah Anda yakin ingin menghapus sopir dengan ID " . $row['id_sopir'] . "?";
                              echo "</div>";
                              echo "<div class='modal-footer'>";
                              echo "<form method='post' action='driver.php'>";
                              echo "<input type='hidden' name='id_sopir' value='" . $row['id_sopir'] . "'>";
                              echo "<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Tutup</button>";
                              echo "<button type='submit' class='btn btn-danger' name='action' value='delete'>Hapus</button>";
                              echo "</form>";
                              echo "</div>";
                              echo "</div>";
                              echo "</div>";
                              echo "</div>";
                            }
                          } else {
                            echo "<tr><td colspan='5'>Tidak ada data sopir.</td></tr>";
                          }
                        ?>
                      </tbody>
                    </table>
                    <!-- Modal konfirmasi hapus -->
                    <div id="modalHapus" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="tutupModalHapus()">&times;</span>
                            <p>Apakah Anda yakin ingin menghapus sopir dengan ID <span id="idSopirHapus"></span>?</p>
                            <button onclick="konfirmasiHapus()">Hapus</button>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Logout -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin logout?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
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
  <script>
      // Inisialisasi modal
      var myModal = new bootstrap.Modal(document.getElementById('logoutModal'), {
          keyboard: false
      });
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

