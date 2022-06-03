<?php

$conn = mysqli_connect("localhost", "root", "", "adsi");

function navbar(){
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="https://smansa-metro.sch.id/images/logosmansa2.png" width="250" height="50" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Data Peminjam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home1.php">Data Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home2.php">Data Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="riwayat.php">Riwayat Peminjaman</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a href="login_staf.php"><button type="button" class="btn btn-danger">Keluar <img src="4115235-exit-logout-sign-out_114030.ico" height="20"></button></a>
                </span>
            </div>
        </div>
    </nav>
    <?php
}

function insert($data)
{
    global $conn;

    $nama = $data['nama_peminjam'];
    $nama_buku = $data['nama_buku'];
    $tgl_pinjam = $data['tgl_pinjam'];
    $tgl_kembali = $data['tgl_kembali'];

    $query = "INSERT INTO peminjaman VALUES (NULL, '$nama', '$nama_buku', '$tgl_pinjam', '$tgl_kembali')";
    var_dump($query);
    mysqli_query($conn, $query);
}

function pindah()
{
    global $conn;
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_peminjam='$id'");

    // while ($row = mysqli_fetch_assoc($data)) { 
    //     $row['nama_peminjam']; 
    //     $row['nama_buku']; 
    //     $row['tgl_pinjam']; 
    //     $row['tgl_kembali']; 
            
    // }
    $row=mysqli_fetch_assoc($data);
    $nama = $row['nama_peminjam'];
    $nama_buku = $row['nama_buku'];
    $tgl_pinjam = $row['tgl_pinjam'];
    $tgl_kembali = $row['tgl_kembali'];

    $query = "INSERT INTO riwayat VALUES (NULL, '$nama', '$nama_buku', '$tgl_pinjam', '$tgl_kembali')";
    var_dump($query);
    mysqli_query($conn, $query);
}

function insert1($data)
{
    global $conn;

    $nama = $data['nama_buku'];
    $jenis_buku = $data['jenis_buku'];
    $kurikulum = $data['kurikulum'];
    $jumlah_buku = $data['jumlah_buku'];

    $query = "INSERT INTO buku VALUES (NULL, '$nama', '$jenis_buku', '$kurikulum', '$jumlah_buku')";
    var_dump($query);
    mysqli_query($conn, $query);
}

function update($data)
{
    global $conn;

    $id = $data['id_peminjam'];
    $nama = $data['nama_peminjam'];
    $nama_buku = $data['nama_buku'];
    $tgl_pinjam = $data['tgl_pinjam'];
    $tgl_kembali = $data['tgl_kembali'];

    $query = "UPDATE peminjaman SET nama_peminjam='$nama', nama_buku='$nama_buku', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali' 
        WHERE id_peminjam='$id' ";
    var_dump($query);
    mysqli_query($conn, $query);
}

function update1($data)
{
    global $conn;

    $id = $data['id_buku'];
    $nama_buku = $data['nama_buku'];
    $jenis_buku = $data['jenis_buku'];
    $kurikulum = $data['kurikulum'];
    $jumlah_buku = $data['jumlah_buku'];

    $query = "UPDATE buku SET nama_buku='$nama_buku', jenis_buku='$jenis_buku', kurikulum='$kurikulum', jumlah_buku='$jumlah_buku' 
        WHERE id_buku='$id' ";
    var_dump($query);
    mysqli_query($conn, $query);
}
