<?php
include 'koneksi.php';

$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

// Validasi input
if (empty($nisn) || empty($nama_lengkap) || empty($alamat)) {
    echo 'Semua data harus diisi';
    exit;
}

// Menyusun query dengan prepared statements untuk mencegah SQL Injection
$query = $connection->prepare("INSERT INTO tb_siswa (nisn, nama_lengkap, alamat) VALUES (?, ?, ?)");
$query->bind_param("sss", $nisn, $nama_lengkap, $alamat);

// Eksekusi query dan cek apakah berhasil
if ($query->execute()) {
    header('Location: index.php');
    exit;
} else {
    echo 'Data Gagal Tersimpan: ' . $connection->error;
}
?>
