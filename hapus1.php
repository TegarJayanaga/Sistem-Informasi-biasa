<?php
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "adsi");
// menangkap data id yang di kirim dari url
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM buku WHERE id_buku=$id";
    $query = mysqli_query($conn,$sql);
    var_dump($query);

    if ($query){
        header('location: home1.php');
    }
    else {
        die("Gagal Menghapus");
    }
}
else {
    die("Data Tidak ada");
}
?>
