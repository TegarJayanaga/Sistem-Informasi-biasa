
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://smansa-metro.sch.id/templates/ltuniversity/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <title>Home</title>
</head>

<body>
    <?php require "functions.php";
    echo navbar();
    ?> 

    <div class="container">
        <div class="row">
            <h3 class="my-3 text-center">Selamat Datang di Sistem Informasi Perpustakaan SMAN 1 Metro</h3>
            <div class="col-sm-6">
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">Manajemen Data Peminajaman</h5>
                        <p class="card-text">Menambah, mengubah dan menghapus data peminajaman buku perpustakaan.</p>
                        <a href="home.php" class="btn btn-primary">Daftar Data Peminjaman</a>
                        <a href="tambahdata2.php" class="btn btn-success">Tambah Data Peminjaman</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">Manajemen Data Buku</h5>
                        <p class="card-text">Menambah, mengubah dan menghapus data buku perpustakaan.</p>
                        <a href="home1.php" class="btn btn-primary">Daftar Data Buku</a>
                        <a href="tambahbuku.php" class="btn btn-success">Tambah Data Buku</a>
                    </div>
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