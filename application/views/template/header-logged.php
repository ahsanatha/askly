<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <link rel="shortcut icon" type="image/png" href="<?=base_url()?>assets\imgs\fav.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?=base_url()?>assets\js\jquery.min.js"></script>
    <script src="<?=base_url()?>assets\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets\css\home.css">
    <link href="<?=base_url()?>assets\css\sentuhan.css" rel="stylesheet">
    <script>
    $(document).ready(function() {
        $('.js-hidden').hide();
        $('#btnProfile').click(function() {
            $('#menuProfile').toggle();
        });

    });
    </script>
    <style>
    body {
        background-color: #EBF2F7;
    }
    </style>
</head>
<!-- navbar start-->
<nav class="navbar navbar-light fixed-top" style="background-color: #4fb3f6;  box-shadow: 1px 1px 10px grey;">
    <div class="sg-header__left"><a href="<?=base_url()?>" class="sg-home-button"
            title="Brainly.co.id - Jaringan Pembelajaran Sosial"><img class="sg-home-button__logo-small"
                src="https://styleguide.brainly.co.id/images/logos/brainly-mobile-426ef8718f.svg"
                alt="Brainly.co.id"><img class="sg-home-button__logo-big"
                src="https://styleguide.brainly.co.id/images/logos/brainly-761d75d6ea.svg" alt="Brainly.co.id"></a>
    </div>
    <div class="sg-header__middle">
        <div class="sg-content-box sg-content-box--full js-react-search-bar">
            <form class="sg-search" method="GET" action="/app/ask" role="search"><input type="hidden" name="entry"
                    value="top"><input required=""
                    class="sg-input sg-input--with-icon sg-search__input sg-input--full-width sg-input--light js-top-search-input"
                    name="q" type="search" placeholder="Apa pertanyaanmu?" data-hj-whitelist="" aria-label="Cari">
                <div class="sg-search__icon">
                    <img src="<?=base_url()?>assets\imgs\search.svg" width="18" height="18">
                </div>
            </form>
        </div>
    </div>
    <div class="sg-header__right">
        <nav class="sg-actions-list sg-actions-list--no-wrap">
            <div class="sg-actions-list__hole sg-actions-list__hole--container">
                <div class="js-messages-box"><button aria-label="Pesan" id="btnPesan"
                        class="sg-icon-as-button js-panel-button js-panel-button-icon sg-icon-as-button--light sg-icon-as-button--transparent">
                        <div class="sg-icon-as-button__hole">
                            <div class="sg-overlayed-box">
                                <img src="<?=base_url()?>assets\imgs\speech-bubble.svg" alt="pesan" width="28">
                            </div>
                        </div>
                    </button>
                    <div id="pesan"
                        class="brn-menu-panel brn-menu-panel--spaced-top brn-menu-panel--restrict-height js-panel-content js-hidden">
                        <div class="sg-bubble sg-bubble--full sg-bubble--top sg-bubble--row-end">
                            <div class="sg-content-box dock-box">
                                <div class="sg-content-box__header dock-box__top">
                                    <h2 class="sg-headline sg-headline--small">
                                        Pesan
                                    </h2>
                                </div>
                                <div class="sg-content-box__content sg-content-box__content--full">
                                    <div class="brn-menu-panel__scrollable js-scrollable-container">
                                        <ul class="sg-list sg-list--spaced-elements js-items-container">
                                            <li class="js-loading sg-text">loading...</li>
                                        </ul>
                                        <div
                                            class="js-empty-box js-hidden brn-menu-panel__empty-message sg-text sg-text--gray">
                                            Tidak ada pesan</div>
                                    </div>
                                </div>
                                <div class="sg-content-box__actions sg-content-box__actions--with-centered-elements"><a
                                        href="/messages" class="sg-button-secondary sg-button-secondary--alt inbox">
                                        kotak masuk
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sg-actions-list__hole sg-actions-list__hole--container">
                <div class="js-notifications-box"><button aria-label="Notifikasi"
                        class="sg-icon-as-button js-panel-button js-panel-button-icon sg-icon-as-button--light sg-icon-as-button--transparent">
                        <div class="sg-icon-as-button__hole">
                            <div class="sg-overlayed-box">
                                <img src="<?=base_url()?>assets\imgs\notification.svg" alt="pesan" width="22">
                            </div>
                        </div>
                    </button>
                </div>
            </div>
            <div class="sg-actions-list__hole sg-actions-list__hole--container">
                <div class="js-community-box"><button aria-label="Undangan"
                        class="sg-icon-as-button js-panel-button js-panel-button-icon sg-icon-as-button--light sg-icon-as-button--transparent">
                        <div class="sg-icon-as-button__hole">
                            <div class="sg-overlayed-box">
                                <img src="<?=base_url()?>assets\imgs\friends.svg" alt="friend" width="25">
                            </div>
                        </div>
                    </button>

                </div>
            </div>
            <div class="sg-actions-list__hole sg-actions-list__hole--no-spacing sg-actions-list__hole--container">
                <div class="user-box js-logged-user-box">
                    <div id="btnProfile" class="user-box__button js-panel-button" role="button" tabindex="0"
                        aria-label="Lihat profil">
                        <div class="sg-icon-as-button sg-icon-as-button--transparent js-panel-button-icon">
                            <div class="sg-icon-as-button__hole">
                                <div class="sg-avatar sg-avatar--small  "><img class="sg-avatar__image"
                                        src="<?=base_url()?>assets\imgs\avatar\<?=$avatar?>" alt="<?= $user['nama']?>"
                                        title="<?= $user['nama']?>" /></div>
                            </div>
                        </div>
                    </div>
                    <div id="menuProfile"
                        class="sg-bubble sg-bubble--top sg-bubble--row-end user-box__menu js-panel-content js-hidden"
                        style="position:absolute; right:-16px">
                        <ul class="sg-menu-list">
                            <li class="sg-menu-list__element"><a class="sg-menu-list__link" href="<?=base_url()?>users">
                                    Lihat profil
                                </a></li>
                            <li class="sg-menu-list__element"><a class="sg-menu-list__link"
                                    href="<?=base_url()?>users/edit">
                                    Edit profil
                                </a></li>
                            <li class="sg-menu-list__element"><a class="sg-menu-list__link"
                                    href="<?=base_url()?>users/logout">
                                    Keluar
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</nav>