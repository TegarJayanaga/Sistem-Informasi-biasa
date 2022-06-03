<?php
$conn = mysqli_connect("localhost", "root", "", "adsi");
$query = "SELECT * FROM akun_siswa";
$result = mysqli_query($conn, $query);
$query1 = "SELECT * FROM akun_guru";
$result1 = mysqli_query($conn, $query1);
$query2 = "SELECT * FROM akun_umum";
$result2 = mysqli_query($conn, $query2);
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
    <title>Manajemen Data Anggota</title>
</head>

<body>
    <?php require "functions.php";
    echo navbar();
    ?>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="my-3">Data Siswa</h3>
                <table class="table table-hover table-striped bg-light table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $row['nama_siswa']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><a href="edit2.php?id=<?php echo $row['id_siswa']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="hapus1.php?id=<?php echo $row['id_siswa']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="tambahbuku.php" class="btn btn-primary btn-lg">Tambah Data</a>
                </div>
                <h3 class="my-3">Data Pengajar</h3>
                <table class="table table-hover table-striped bg-light table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Pengajar</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php while ($row = mysqli_fetch_assoc($result1)) { ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $row['nama_guru']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><a href="edit2.php?id=<?php echo $row['id_siswa']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="hapus1.php?id=<?php echo $row['id_siswa']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="tambahbuku.php" class="btn btn-primary btn-lg">Tambah Data</a>
                </div>
                <h3 class="my-3">Data Warga Sekolah Lainnya</h3>
                <table class="table table-hover table-striped bg-light table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Warga Sekolah</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php while ($row = mysqli_fetch_assoc($result2)) { ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $row['nama_umum']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><a href="edit2.php?id=<?php echo $row['id_siswa']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="hapus1.php?id=<?php echo $row['id_siswa']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="tambahbuku.php" class="btn btn-primary btn-lg">Tambah Data</a>
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