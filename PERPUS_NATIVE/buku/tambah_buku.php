<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah buku</title>
</head>
<body>
    <div class="container">
        <h3>Tambah buku</h3>
        <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">
            Nama Buku :
            <input type="text" name="nama_buku" value="" class="form-control">
            Deskripsi : 
            <input type="text" name="deskripsi" value="" class="form-control">
            Foto produk : 
            <input type="file" name="foto_buku" value="" class="form-control">
            <br>
            <input type="submit" name="simpan" value="Tambah buku" class="btn btn-primary">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
