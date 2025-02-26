<?php 
    include 'koneksi.php';

    $id = $_GET['id'];

    $query = "SELECT * FROM tb_siswa WHERE id_siswa = $id LIMIT 1";

    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Siswa</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        EDIT SISWA
                    </div>
                    <div class="card-body">
                        <form action="update_siswa.php" method="post">
                            <div class="form-group">
                                <label for="">NISN</label>
                                <input type="text" name="nisn" value="<?php echo $row['nisn']?>" id="" placeholder="Masukkan NISN Anda.." class="form-control">
                                <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa']?>">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>" id="" placeholder="Masukkan nama lengkap Anda.." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" id="" placeholder="Masukkan Alamat Anda.." class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-danger">RESET</button>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>