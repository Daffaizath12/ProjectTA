<?php
include "koneksi.php";

// Cek apakah ID sopir disediakan
if (isset($_GET['id_sopir'])) {
    $id_sopir = $_GET['id_sopir'];

    // Query untuk menghapus data sopir berdasarkan ID
    $query = "DELETE FROM sopir WHERE id_sopir = $id_sopir";
    
    // Eksekusi query
    if ($conn->query($query) === TRUE) {
        // Redirect setelah proses penghapusan selesai
        header("Location: driver.php");
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    // Redirect jika ID sopir tidak disediakan
    header("Location: driver.php");
    exit;
}

// Pastikan koneksi terbuka
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
