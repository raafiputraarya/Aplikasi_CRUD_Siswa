<?php 
    include 'koneksi.php';

    $id = $_GET['id'];

    $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id'";

    if($connection->query($query)){
        header('Location:index.php');
    }else{
        echo "DATA GAGAL DIHAPUS";
    }
?>