<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel ngab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3></h3>
  <p></p>
  <p></p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="bo.jpg" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Tampil_siswa.php">Data Siswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tampil_kelas.php">Data Kelas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href=""></a>
    </li>
  </ul>
</nav>

</body>
</html>

    <h3>Tampil Siswa</h3>
    <a href="tambah_siswa.php" type="button" class="btn btn-success" >Tambah Siswa</button></a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
            <th>NO</th><th>NAMA SISWA</th><th>TANGGAL LAHIR</th>
            <th>ALAMAT</th><th>GENDER</th>
            <th>USERNAME</th><th>KELAS</th><th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_siswa=mysqli_query($conn, "select * from siswa join kelas on kelas.id_kelas = siswa.id_kelas");
            $no=0;
            while($data_siswa=mysqli_fetch_array($qry_siswa)){
            $no++;?>

            <tr>
                <td><?=$no?></td>
                <td><?=$data_siswa['nama_siswa']?></td>
                <td><?=$data_siswa['tanggal_lahir']?></td>
                <td><?=$data_siswa['alamat']?></td>
                <td><?=$data_siswa['gender']?></td>
                <td><?=$data_siswa['username']?></td>
                <td><?=$data_siswa['nama_kelas']?></td>
                <td><a href="ubah_siswa.php?id_siswa=<?=$data_siswa['ID_siswa']?>" class="btn btn-success">Ubah</a>
                <a href="hapus.php?id_siswa=<?=$data_siswa['ID_siswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>


            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
</body>
</html>