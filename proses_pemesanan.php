<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama_pemesan = $_POST['nama_pemesan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nomor_identitas = $_POST['nomor_identitas'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $tanggal_pesan = $_POST['tanggal_pesan']; 
    $durasi = $_POST['durasi'];
    $breakfast = isset($_POST['breakfast']) ? 'Ya' : 'Tidak';
    $total_bayar = $_POST['total_bayar'];
    $diskon = $_POST['diskon'];


    $conn = new mysqli("localhost", "root", "", "sertifikasi_martin");
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO pemesanan_kamar (nama_pemesan, jenis_kelamin, nomor_identitas, tipe_kamar, tanggal_pesan, durasi, breakfast, total_bayar, diskon) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissssss", $nama_pemesan, $jenis_kelamin, $nomor_identitas, $tipe_kamar, $tanggal_pesan, $durasi, $breakfast, $total_bayar, $diskon);

    if ($stmt->execute()) {
        header("Location: display.php");
        exit; 
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Permintaan tidak valid.";
}
?>
