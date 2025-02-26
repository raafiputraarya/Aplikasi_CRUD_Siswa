<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman input siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>TAMBAH SISWA</h3>
                    </div>
                    <div class="card-body">
                        <form action="simpan_siswa.php" method="post">
                            <div class="form-group">
                                <label for="">NISN</label>
                                <input type="text" name="nisn" placeholder="Masukkan NISN Anda.." class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Nama lengkap</label>
                                <input type="text" name="nama_lengkap" placeholder="Masukkan Nama lengkap Anda.." class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea type="text" name="alamat" placeholder="Masukkan Alamat Anda.." row="4" class="form-control" id=""></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>