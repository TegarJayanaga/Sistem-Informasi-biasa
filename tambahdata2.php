<?php
$nomor = 1;
$conn = mysqli_connect("localhost", "root", "", "adsi");
$query1 = "SELECT * FROM buku WHERE jenis_buku='WAJIB'";
$result1 = mysqli_query($conn, $query1);
$query2 = "SELECT * FROM buku WHERE jenis_buku='UMUM'";
$result2 = mysqli_query($conn, $query2);
$query3 = "SELECT * FROM buku WHERE jenis_buku='PENGAJAR'";
$result3 = mysqli_query($conn, $query3);
$query4 = "SELECT * FROM akun_siswa";
$result4 = mysqli_query($conn, $query4);
$query5 = "SELECT * FROM akun_guru";
$result5 = mysqli_query($conn, $query5);
$query6 = "SELECT * FROM akun_umum";
$result6 = mysqli_query($conn, $query6);
require "functions.php";
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
    <title>Tambah Data Peminjam</title>
</head>

<body>
    <?php require "functions.php";
    echo navbar();
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="my-3 text-center">Form Tambah Data Peminjaman</h3>
                <form action="tampildata.php" method="POST">
                    <div class="mb-3">
                        <label for="nama1" class="form-label">Nama Peminjam</label>
                        <select class="form-select" aria-label="Default select example" id="nama_peminjam" name="nama_peminjam">
                            <option selected>Daftar Anggota</option>
                            <optgroup label="Siswa">
                                <?php while ($row = mysqli_fetch_assoc($result4)) { ?>
                                    <option value="<?php echo $row['nama_siswa']; ?>"><?php echo $row['nama_siswa']; ?></option>
                                <?php } ?>
                            </optgroup>
                            <optgroup label="Guru">
                                <?php while ($row = mysqli_fetch_assoc($result5)) { ?>
                                    <option value="<?php echo $row['nama_guru']; ?>"><?php echo $row['nama_guru']; ?></option>
                                <?php } ?>
                            </optgroup>
                            <optgroup label="Lainnya">
                                <?php while ($row = mysqli_fetch_assoc($result6)) { ?>
                                    <option value="<?php echo $row['nama_umum']; ?>"><?php echo $row['nama_umum']; ?></option>
                                <?php } ?>
                            </optgroup>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat1" class="form-label">Nama Buku</label>
                        <select class="form-select" aria-label="Default select example" id="nama_buku" name="nama_buku">
                            <option selected>Daftar Buku</option>
                            <optgroup label="Buku Wajib">
                                <?php while ($row = mysqli_fetch_assoc($result1)) { ?>
                                    <option value="<?php echo $row['nama_buku']; ?>"><?php echo $row['nama_buku']; ?></option>
                                <?php } ?>
                            </optgroup>
                            <optgroup label="Buku Umum">
                                <?php while ($row = mysqli_fetch_assoc($result2)) { ?>
                                    <option value="<?php echo $row['nama_buku']; ?>"><?php echo $row['nama_buku']; ?></option>
                                <?php } ?>
                            </optgroup>
                            <optgroup label="Buku Pengajar">
                                <?php while ($row = mysqli_fetch_assoc($result3)) { ?>
                                    <option value="<?php echo $row['nama_buku']; ?>"><?php echo $row['nama_buku']; ?></option>
                                <?php } ?>
                            </optgroup>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tgl" class="form-label">Tanggal Pinjam</label><br>
                        <input type="date" id="tgl_pinjam" name="tgl_pinjam">
                    </div>
                    <div class="mb-3">
                        <label for="tgl" class="form-label">Tanggal Kembali</label><br>
                        <input type="date" id="tgl_kembali" name="tgl_kembali">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
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