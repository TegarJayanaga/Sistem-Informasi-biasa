<?php
$conn = mysqli_connect("localhost", "root", "", "adsi");
$query = "SELECT * FROM peminjaman";
$result = mysqli_query($conn, $query)
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://smansa-metro.sch.id/templates/ltuniversity/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <title>Manajemen Data Peminjam</title>
</head>

<body>
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
                        <a class="nav-link" href="home1.php">Data Anggota</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <button type="button" class="btn btn-danger" href="login_staf.php">Keluar <img src="4115235-exit-logout-sign-out_114030.ico" height="20"></button>
                </span>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="my-3">Riwayat Peminjaman Buku Perpustakaan</h3>
                <table class="table table-hover table-striped bg-light table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Peminjam</th>
                            <th scope="col">Nama Buku</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $row['nama_peminjam']; ?></td>
                                <td><?php echo $row['nama_buku']; ?></td>
                                <td><?php echo $row['tgl_pinjam']; ?></td>
                                <td><?php echo $row['tgl_kembali']; ?></td>
                                <td>
                                    <a href="hapus.php?id=<?php echo $row['id_peminjam']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="tambahdata2.php" class="btn btn-info btn-lg">Cetak Laporan</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>