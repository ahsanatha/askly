<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <link rel="shortcut icon" type="image/png" href="assets\imgs\fav.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\home.css">
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\js\jquery.min.js"></script>
    <link href="assets\css\sentuhan.css" rel="stylesheet">
</head>
<!-- navbar start-->
<nav class="navbar navbar-light" style="background-color: #3399ff;  box-shadow: 1px 1px 10px grey;">
    <a class="navbar-brand" href="#">
        <img src="assets\imgs\800px-Brainly_logo.png" width="90" height="40" alt="askly">
    </a>
    <span class="navbar-brand mb-0 h1"></span>
    <button class="btn btn-dark" style="border-radius: 10px; box-shadow: 1px 1px 10px grey"
        href="<?= base_url() ?>">Masuk</button>
</nav>
<!-- navbar end-->
<!-- bagian tengah start -->

<body style="background-color: #e6f2ff;">
    <div class="sg-layout__container js-main-container sg-layout__container--reversed-order">
        <div class="sg-layout__content sg-hide-for-medium-down">
            <div class="sg-content-box">
                <div class="sg-content-box__title sg-content-box__title--spaced-top-large">
                    <h1 class="sg-text-bit sg-text-bit--blue-secondary sg-text-bit--large">Hari ini <br> update <br>
                        ilmu apa?</h1>
                </div>
            </div>
        </div>
        <div class="sg-layout__aside-content">
            <div class="sg-layout__box">
                <div class="sg-content-box js-sign-in-react">
                    <div data-test="authentication-form" class="sg-content-box">
                        <div class="sg-content-box sg-content-box--spaced-bottom-large">
                            <div class="sg-content-box sg-content-box--spaced-bottom-small">
                                <h1 class="sg-headline sg-headline--small sg-headline--to-left">Masuk</h1>
                            </div>
                        </div>
                        <div class="sg-content-box sg-content-box--spaced-bottom-large">
                            <div class="sg-content-box__content sg-content-box__content--with-centered-text">
                                <button class="sg-button-primary sg-button-primary--full-width sg-button-primary--fb">
                                    <span class="sg-button-primary__icon">
                                        <div class="sg-icon sg-icon--x16">
                                            <svg class="sg-icon__svg">
                                                <use xlink:href="#icon-fb">

                                                </use>
                                            </svg>
                                        </div>
                                    </span>Dengan Facebook</button>
                            </div>
                        </div>
                        <div class="sg-content-box sg-content-box--spaced-bottom">
                            <div class="sg-content-box sg-content-box--spaced-bottom">
                                <div class="sg-actions-list">
                                    <div class="sg-actions-list__hole sg-actions-list__hole--grow">
                                        <div class="sg-horizontal-separator">

                                        </div>
                                    </div>
                                    <div class="sg-actions-list__hole">
                                        <div class="sg-text sg-text--bold">atau</div>
                                    </div>
                                    <div class="sg-actions-list__hole sg-actions-list__hole--grow">
                                        <div class="sg-horizontal-separator">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="<?=base_url()?>login/doLogin" method="post">
                            <div class="sg-content-box__content sg-content-box__content--spaced-bottom">
                                <input type="text" class="sg-input sg-input--full-width"
                                    placeholder="Nama panggilan atau email " name="username" value="">
                            </div>
                            <div class="sg-content-box__content sg-content-box__content--spaced-bottom">
                                <input type="password" class="sg-input sg-input--full-width" placeholder="Kata sandi"
                                    name="password" value="">
                            </div>
                            <div class="sg-content-box__content sg-content-box__content--spaced-bottom-large">
                                <div class="sg-actions-list">
                                    <div class="sg-actions-list__hole">
                                        <div class="sg-actions-list sg-actions-list--no-wrap">
                                            <div
                                                class="sg-actions-list__hole sg-actions-list__hole--container sg-actions-list__hole--no-shrink">
                                                <div class="sg-checkbox">
                                                    <input class="sg-checkbox__element" type="checkbox" id="autoLogin"
                                                        name="autoLogin" checked=""><label class="sg-checkbox__ghost"
                                                        for="autoLogin">
                                                        <div class="sg-icon sg-icon--adaptive sg-icon--x10">
                                                            <svg class="sg-icon__svg">
                                                                <use xlink:href="#icon-check">

                                                                </use>
                                                            </svg>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="sg-actions-list__hole">
                                                <label for="autoLogin"
                                                    class="sg-text sg-text--xsmall sg-text--gray sg-text--bold sg-text--justify">Saya
                                                    ingin tetap masuk</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sg-actions-list__hole sg-actions-list__hole--to-right">
                                        <a href="#"
                                            class="sg-text sg-text--xsmall sg-text--link sg-text--bold sg-text--blue-dark">Lupa
                                            kata sandi?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sg-content-box__content sg-content-box__content--spaced-bottom-xlarge">
                                <button data-test="form-login-submit"
                                    class="sg-button-primary sg-button-primary--alt">Masuk</button>
                            </div>
                        </form>
                        <div class="sg-content-box__content">
                            <div class="sg-text sg-text--xsmall sg-text--gray sg-text--bold">Saya tidak memiliki akun,
                                <a href="#"
                                    class="sg-text sg-text--xsmall sg-text--link sg-text--bold sg-text--blue-dark">mendaftar
                                    sekarang</a>. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>