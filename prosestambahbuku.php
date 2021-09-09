<?php
if($_POST){
    $judul_buku=$_POST['judul_buku'];
    $penulis=$_POST['penulis'];
    $penerbit=$_POST['penerbit'];
    if(empty($judul_buku)){
        echo "<script>alert('judul buku tidak boleh kosong');location.href='tambahbuku.php';</script>";
 
    } elseif(empty($penulis)){
        echo "<script>alert('penulis tidak boleh kosong');location.href='tambahbuku.php';</script>";

    }   elseif(empty($penerbit)){
            echo "<script>alert('penerbit tidak boleh kosong');location.href='tambahbuku.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into tabel_buku (judul_buku, penulis, penerbit) value ('".$judul_buku."','".$penulis."','".$penerbit."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan buku');location.href='tambahbuku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan buku');location.href='tambahbuku.php';</script>";
        }
    }
}
?>