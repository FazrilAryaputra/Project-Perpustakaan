<?php 
$conn=mysqli_connect('localhost','root','','belajar_laravel');
/* check connection */
if (mysqli_connect_error()) {
    printf("koneksi ke database gagal", mysqli_connect_error());
    exit();
}
?>