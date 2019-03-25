<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\home.css">
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\js\jquery.min.js"></script>
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
    <!-- bagian tengah end -->
    <!-- slide kategori -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end slide kategori -->
</body>

</html>