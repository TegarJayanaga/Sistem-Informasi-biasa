<?php
$conn = mysqli_connect("localhost", "root", "", "adsi");
$query = "SELECT * FROM buku";
$result = mysqli_query($conn, $query);
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku='$id'");
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
    <title>Ubah Data Buku</title>
</head>

<body>
    <?php require "functions.php";
    echo navbar();
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="my-3 text-center">Ubah Data Buku</h3>
                <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                    <form action="update2.php" method="POST" name="form">
                        <input type="hidden" id="id_buku" name="id_buku" value="<?= $row['id_buku']; ?>">
                        <div class=" mb-3">
                            <label for="nama1" class="form-label">Nama Buku</label>
                            <input type="text" class="form-control" id="nama_buku" name="nama_buku" value="<?= $row['nama_buku']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama2" class="form-label">Jenis Buku</label>
                            <select class="form-select" aria-label="Default select example" id="jenis_buku" name="jenis_buku">
                                <option selected value="<?= $row['jenis_buku']; ?>"><?php echo $row['jenis_buku']; ?></option>
                                <option value="WAJIB">WAJIB</option>
                                <option value="PENGAJAR">PENGAJAR</option>
                                <option value="UMUM">UMUM</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kur" class="form-label">Kurikulum</label>
                            <select class="form-select" aria-label="Default select example" id="kurikulum" name="kurikulum">
                                <option selected value="<?= $row['kurikulum']; ?>"><?php echo $row['kurikulum']; ?></option>
                                <option value="2004">2004</option>
                                <option value="2006">2006</option>
                                <option value="2013">2013</option>
                                <option value="UMUM">UMUM</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah_buku" name="jumlah_buku" value="<?= $row['jumlah_buku']; ?>">
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