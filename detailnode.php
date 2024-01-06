<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Node</title>
</head>
<body>
    <h2>Detail Node</h2>

    <?php
    // Sambungkan ke database atau file yang diperlukan
    // ...

    // Gunakan Geocoding
    include "Geocoding.php";

    // Ganti 'YOUR_API_KEY' dengan API key Google Maps Anda
    $apiKey = 'AIzaSyDhLEThhqjNFDidd2TftyL7v0RjYFUMFvU';
    $geocoding = new Geocoding($apiKey);

    // Ambil parameter dari URL
    $alamat_jemput = urldecode($_GET["alamat_jemput"]);
    $alamat_tujuan = urldecode($_GET["alamat_tujuan"]);

    // Gunakan Geocoding untuk mendapatkan koordinat
    $koordinat_jemput = $geocoding->geocodeAddress($alamat_jemput);
    $koordinat_tujuan = $geocoding->geocodeAddress($alamat_tujuan);

    if ($geocoding->getErrorMessage()) {
        // Tampilkan pesan kesalahan
        echo $geocoding->getErrorMessage();
    } elseif ($koordinat_jemput && $koordinat_tujuan) {
        // Lakukan sesuatu dengan koordinat jika berhasil
        $latitude_jemput = $koordinat_jemput->lat;
        $longitude_jemput = $koordinat_jemput->lng;
        $latitude_tujuan = $koordinat_tujuan->lat;
        $longitude_tujuan = $koordinat_tujuan->lng;
    
        echo "<p>Alamat Jemput: $alamat_jemput (Latitude: $latitude_jemput, Longitude: $longitude_jemput)</p>";
        echo "<p>Alamat Tujuan: $alamat_tujuan (Latitude: $latitude_tujuan, Longitude: $longitude_tujuan)</p>";
        // Lanjutkan dengan menampilkan informasi lain yang diperlukan
    } else {
        // Tampilkan pesan kesalahan umum jika geocoding gagal tanpa pesan khusus
        echo "Gagal mendapatkan koordinat untuk alamat.";
    }
    ?>
</body>
</html>
