<?php 
    include 'koneksi.php';

    $id_siswa = $_POST['id_siswa'];
    $nisn = $_POST['nisn'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE tb_siswa SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', alamat = '$alamat' WHERE id_siswa = '$id_siswa'";

    if($connection->query($query)){
        header('Location:index.php');
    }else{
        echo 'DATA GAGAl DI UPDATE!';
    }
?>