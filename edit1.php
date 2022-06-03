<?php
$conn = mysqli_connect("localhost", "root", "", "adsi");
$query = "SELECT * FROM peminjaman";
$result = mysqli_query($conn, $query);
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_peminjam='$id'");
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
    <title>Ubah Data Peminjam</title>
</head>

<body>
    <?php require "functions.php";
    echo navbar();
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="my-3 text-center">Ubah Data Peminjaman</h3>
                <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                    <form action="update1.php" method="POST" name="form">
                        <input type="hidden" id="id_peminjam" name="id_peminjam" value="<?= $row['id_peminjam']; ?>">
                        <div class=" mb-3">
                            <label for="nama1" class="form-label">Nama Peminjam</label>
                            <select class="form-select" aria-label="Default select example" id="nama_peminjam" name="nama_peminjam">
                                <option selected value="<?= $row['nama_peminjam']; ?>"><?php echo $row['nama_peminjam']; ?></option>
                                <optgroup label="Siswa">
                                    <?php while ($row1 = mysqli_fetch_assoc($result4)) { ?>
                                        <option value="<?php echo $row1['nama_siswa']; ?>"><?php echo $row1['nama_siswa']; ?></option>
                                    <?php } ?>
                                </optgroup>
                                <optgroup label="Guru">
                                    <?php while ($row2 = mysqli_fetch_assoc($result5)) { ?>
                                        <option value="<?php echo $row2['nama_guru']; ?>"><?php echo $row2['nama_guru']; ?></option>
                                    <?php } ?>
                                </optgroup>
                                <optgroup label="Lainnya">
                                    <?php while ($row3 = mysqli_fetch_assoc($result6)) { ?>
                                        <option value="<?php echo $row3['nama_umum']; ?>"><?php echo $row3['nama_umum']; ?></option>
                                    <?php } ?>
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamat1" class="form-label">Nama Buku</label>
                            <select class="form-select" aria-label="Default select example" id="nama_buku" name="nama_buku" >
                                <option selected value="<?= $row['nama_buku']; ?>"><?php echo $row['nama_buku']; ?></option>
                                <optgroup label="Buku Wajib">
                                    <?php while ($row4 = mysqli_fetch_assoc($result1)) { ?>
                                        <option value="<?php echo $row4['nama_buku']; ?>"><?php echo $row4['nama_buku']; ?></option>
                                    <?php } ?>
                                </optgroup>
                                <optgroup label="Buku Umum">
                                    <?php while ($row5 = mysqli_fetch_assoc($result2)) { ?>
                                        <option value="<?php echo $row5['nama_buku']; ?>"><?php echo $row5['nama_buku']; ?></option>
                                    <?php } ?>
                                </optgroup>
                                <optgroup label="Buku Pengajar">
                                    <?php while ($row6 = mysqli_fetch_assoc($result3)) { ?>
                                        <option value="<?php echo $row6['nama_buku']; ?>"><?php echo $row6['nama_buku']; ?></option>
                                    <?php } ?>
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tgl" class="form-label">Tanggal Pinjam</label><br>
                            <input type="date" id="tgl_pinjam" name="tgl_pinjam" value="<?= $row['tgl_pinjam']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tgl" class="form-label">Tanggal Kembali</label><br>
                            <input type="date" id="tgl_kembali" name="tgl_kembali" value="<?= $row['tgl_kembali']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="update">Submit</button>
                    </form>
                <?php } ?>
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