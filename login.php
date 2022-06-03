<?php
$conn = mysqli_connect("localhost", "root", "", "adsi");
$query = "SELECT * FROM peminjaman";
$result = mysqli_query($conn, $query);

$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query($conn, "SELECT * FROM akun_staf where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);

if ($cek==1) {
    header("location:index.php");
}
else{
    header("location:login_staf.php");
}
?>