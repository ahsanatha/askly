<?php
require_once 'vendor\autoload.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor\twbs\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\home.css">
    <script src="vendor\components\jquery\jquery.min.js"></script>
    <script src="vendor\twbs\bootstrap\dist\js\bootstrap.min.js"></script>
</head>

<body>

    <!-- Navbar start -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="assets\imgs\800px-Brainly_logo.png" width="90" height="40" alt="askly">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active mr-3">
                        <a class="nav-link text-dark font-weight-bold" href="#">MASUK</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link text-dark font-weight-bold" href="#">DAFTAR</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 mr-5">
                    <button class="btn btn-outline-dark my-2 my-sm-0 font-weight-bold" type="submit">AJUKAN
                        PERTANYAAN</button>
                </form>
            </div>
        </nav>
    </div>
    <!-- navbar end-->
    <!-- bagian tengah start -->
    <div class="d-flex px-5 pt-5" id="tengah">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class=" display-4 font-weight-bolder"> Dari bertanya jadi <br /> mengerti </h1>
                    <p>Brainly adalah tempat berbagi ilmu 150 juta siswa dan pakar edukasi, belajar bersama
                        untuk menyelesaikan soal-soal yang paling rumit sekalipun</p>
                </div>
                <div class="col">
                    <img class="ml-lg-5" src="assets\imgs\hero-animation.svg" alt="" width="400rem" class="ml-2">
                </div>
            </div>
        </div>
    </div>
    <!-- bagian tengah start -->
</body>

</html>