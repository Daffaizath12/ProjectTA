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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/style.css">

	<title>Petta Tour And Travel</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
		<img src="img/logo.png">
		</a>
		<ul class="side-menu top">
			<li>
				<a href="dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="datapelanggan.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Kelola Pelanggan</span>
				</a>
			</li>
			<li>
				<a href="datasupir.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Kelola Sopir</span>
				</a>
			</li>
			<li>
				<a href="dataarmada.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Kelola Armada</span>
				</a>
			</li>
			<li>
				<a href="pemesanan.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Kelola Pemesanan</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<a href="#" class="nav-link"><?php echo $username?></a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Kelola Pelanggan</h1>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Data Pelanggan</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Nama</th>
								<th>Email</th>
								<th>Kontak</th>
								<th>Alamat</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><p>John Doe</p></td>
								<td>JhonDoe@gmail.com</td>
								<td>082233344521</td>
								<td>Gg. Tomat, Gayungan 8, Gayungsari, kec. Kebonsari, Kota Surabaya</td>
							</tr>
							<tr>
								<td><p>John Doe</p></td>
								<td>JhonDoe@gmail.com</td>
								<td>082233344521</td>
								<td>Gg. Tomat, Gayungan 8, Gayungsari, kec. Kebonsari, Kota Surabaya</td>
							</tr>
							<tr>
								<td><p>John Doe</p></td>
								<td>JhonDoe@gmail.com</td>
								<td>082233344521</td>
								<td>Gg. Tomat, Gayungan 8, Gayungsari, kec. Kebonsari, Kota Surabaya</td>
							</tr>
							<tr>
								<td><p>John Doe</p></td>
								<td>JhonDoe@gmail.com</td>
								<td>082233344521</td>
								<td>Gg. Tomat, Gayungan 8, Gayungsari, kec. Kebonsari, Kota Surabaya</td>
							</tr>
							<tr>
								<td><p>John Doe</p></td>
								<td>JhonDoe@gmail.com</td>
								<td>082233344521</td>
								<td>Gg. Tomat, Gayungan 8, Gayungsari, kec. Kebonsari, Kota Surabaya</td>
							</tr>
							<tr>
								<td><p>John Doe</p></td>
								<td>JhonDoe@gmail.com</td>
								<td>082233344521</td>
								<td>Gg. Tomat, Gayungan 8, Gayungsari, kec. Kebonsari, Kota Surabaya</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="js/script.js"></script>
</body>
</html>