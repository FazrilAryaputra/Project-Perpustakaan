<!DOCTYPE html>
<html lang="en">
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"">
    <title></title>
</head>
<body>
    <h3>Tambah Buku</h3>
    <form action="prosestambahbuku.php" method="post">
        Judul buku:
        <input type="text" name="judul_buku" value="" class="form-control">
        Penulis:
        <input type="text" name="penulis" value="" class="form-control">
        Penerbit:
        <input type="text" name="penerbit" value="" class="form-control">
        <input type="submit" name="simpan" value="tambah buku" class="btn btn-primary">
    </form>

    <script> src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>