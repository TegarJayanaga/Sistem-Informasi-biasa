<?php
require "functions.php";
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "adsi");
// menangkap data id yang di kirim dari url
if (isset($_GET['id'])){
    $id = $_GET['id'];
    pindah();
    $sql = "DELETE FROM peminjaman WHERE id_peminjam=$id";
    $query1 = mysqli_query($conn,$sql);
    var_dump($query1);

    if ($query1){
        header('location: home.php');
    }
    else {
        die("Gagal Menghapus");
    }
}
else {
    die("Data Tidak ada");
}
