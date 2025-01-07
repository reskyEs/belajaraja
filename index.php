<?php
require "koneksi.php";
if (!isset($_SESSION['id_akun'])) {
    $_SESSION['error'] = "Anda harus login terlebih dahulu.";
    header("Location: login.blade.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .jumbotron {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* membuat body tidak dapat di scroll */
        html,
        body {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }

        .navbar-nav .nav-item .nav-link {
            color: black;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="#">
            <img src="./image/logo.jpeg" width="50" height="50" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jasa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Harga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron text-center" style="background-image: url('./image/laundry-2.jpeg'); background-size: cover; background-position: center; color: white;">
        <h1 class="display-4">Welcome to RAR Laundry</h1>
        <p class="lead">laundry yang cepat, mantap, dan tahan lama cuma 7RB per Kg aja lohh </p>
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary btn-lg mx-2" href="tabel_data.php" role="button">tabel data laundry</a>
            <a class="btn btn-primary btn-lg mx-2" href="tabel_keuangan.php" role="button">tabel keuangan laundry</a>
            <a class="btn btn-primary btn-lg mx-2" href="tabel_pemesanan.php" role="button">tabel pemesanan</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>