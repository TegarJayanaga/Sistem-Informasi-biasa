<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://smansa-metro.sch.id/templates/ltuniversity/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <title>Halaman Login Staff</title>
</head>

<body style="background-color: #008DD5;">
    <div class="container ">
        <div class="row content bg-dark" style="margin: 8%; padding: 4rem 1rem 4rem 1rem;">
            <div class="col-md-6">
                <div class="my-5">
                    <img src="https://smansa-metro.sch.id/images/logosmansa2.png" alt="image" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="mb-3 text-center fw-bold" style="color: #FF7A59">LOGIN</h3>
                <form style="max-width: 480px; margin: auto;" action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label" style="color: #FF7A59">Username</label>
                        <input type="text" name="username" class="form-control" id="username" required autofocus autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" style="color: #FF7A59">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required autocomplete="off">
                    </div>
                    <button type="submit" style="width: 100%" name="login" value="Log in" class="btn btn-primary fw-bold mt-2">Login</button>
                </form>
            </div>

        </div>

    </div>










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>