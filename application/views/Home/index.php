<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <link rel="shortcut icon" type="image/png" href="assets\imgs\fav.ico" />
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
                        <a class="nav-link text-dark font-weight-bold" href="<?= base_url() ?>login">MASUK</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link text-dark font-weight-bold" href="#">DAFTAR</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 mr-5">
                    <a href="" class="nav-link">
                        <button class="btn btn-outline-dark my-2 my-sm-0 font-weight-bold " type="submit" id="ajukan">
                            AJUKAN PERTANYAAN
                        </button>
                    </a>
                </form>
            </div>
        </nav>
    </div>
    <!-- navbar end-->
    <!-- bagian tengah start -->
    <div class="d-flex pt-5" id="tengah">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="d-inline-flex flex-column">
                        <h1 class=" display-4 font-weight-bolder"> Dari bertanya jadi <br /> mengerti </h1>
                        <p>Brainly adalah tempat berbagi ilmu 150 juta siswa dan pakar edukasi, belajar bersama
                            untuk menyelesaikan soal-soal yang paling rumit sekalipun</p>
                    </div>
                    <div class="d-inline-flex bg-white p-3 "
                        style="width:600px; height: 120px; border-radius: 70px 70px 70px">
                        <input type="text" style="width:550px; border: 0px solid; background-color: transparent;"
                            placeholder="Apa pertanyaanmu?" id="pertanyaan">
                        <button style="width: 50px;height: 50px;background: black;border-radius:50%; position: center;"
                            class="ss" id="btn-pertanyaan"><img style="width:20px;" src="assets\imgs\search.png"
                                alt="cari"></button>
                    </div>
                </div>
                <div class="col-4">
                    <img src="assets\imgs\hero-animation.svg" alt="" width="400rem">
                </div>
            </div>
        </div>
    </div>
    <!-- bagian tengah end -->
    <!-- slide kategori -->

    <!-- end slide kategori -->
</body>

</html>