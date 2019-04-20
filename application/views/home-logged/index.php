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
    <link href="assets\css\sentuhan.css" rel="stylesheet">
    <script>
    $(document).ready(function() {
        $('.js-hidden').hide();
    });
    </script>
</head>
<!-- navbar start-->
<nav class="navbar navbar-light" style="background-color: #4fb3f6;  box-shadow: 1px 1px 10px grey;">
    <div class="sg-header__left"><a href="/" class="sg-home-button"
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
                    <img src="assets\imgs\search.svg" width="18" height="18">
                </div>
            </form>
        </div>
    </div>
    <div class="sg-header__right">
        <nav class="sg-actions-list sg-actions-list--no-wrap">
            <div class="sg-actions-list__hole sg-actions-list__hole--container">
                <div class="js-messages-box"><button aria-label="Pesan"
                        class="sg-icon-as-button js-panel-button js-panel-button-icon sg-icon-as-button--light sg-icon-as-button--transparent">
                        <div class="sg-icon-as-button__hole">
                            <div class="sg-overlayed-box">
                                <img src="assets\imgs\speech-bubble.svg" alt="pesan" width="28" height="32">
                            </div>
                        </div>
                    </button>
                    <div
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
                                <img src="assets\imgs\notification.svg" alt="pesan" width="28" height="32">
                            </div>
                        </div>
                    </button>
                    <div
                        class="brn-menu-panel brn-menu-panel--spaced-top brn-menu-panel--restrict-height js-panel-content js-hidden">
                        <div class="sg-bubble sg-bubble--full sg-bubble--top sg-bubble--row-end">
                            <div class="sg-content-box dock-box dock-box--top-only">
                                <div class="sg-content-box__header dock-box__top">
                                    <h2 class="sg-headline sg-headline--small">
                                        Notifikasi
                                    </h2>
                                </div>
                                <div class="sg-content-box__content sg-content-box__content--full">
                                    <div class="sliding-panel js-sliding-panel">
                                        <div class="sliding-panel__wrapper">
                                            <div class="sliding-panel__element">
                                                <div class="brn-menu-panel__scrollable js-scrollable-container">
                                                    <ul class="sg-list sg-list--spaced-elements js-items-container">
                                                        <li class="js-loading sg-text">loading...</li>
                                                    </ul>
                                                    <div
                                                        class="js-empty-box js-hidden brn-menu-panel__empty-message sg-text sg-text--gray">
                                                        Tanpa notifikasi</div>
                                                </div>
                                            </div>
                                            <div class="sliding-panel__element">
                                                <div class="brn-menu-panel__scrollable">
                                                    <div class="js-notification-details-container"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sg-actions-list__hole sg-actions-list__hole--container">
                <div class="js-community-box"><button aria-label="Undangan"
                        class="sg-icon-as-button js-panel-button js-panel-button-icon sg-icon-as-button--light sg-icon-as-button--transparent">
                        <div class="sg-icon-as-button__hole">
                            <div class="sg-overlayed-box"><svg class="sg-icon sg-icon--x24 sg-icon--adaptive">
                                    <use xlink:href="#icon-friends"></use>
                                </svg>
                            </div>
                        </div>
                    </button>
                    <div class="brn-menu-panel brn-menu-panel--spaced-top js-panel-content js-hidden">
                        <div class="sg-bubble sg-bubble--top sg-bubble--row-end">
                            <div class="js-invitations js-hidden">
                                <div class="sg-content-box">
                                    <div class="sg-content-box__header sg-content-box--spaced">
                                        <h2 class="sg-headline sg-headline--small">
                                            Undangan
                                        </h2>
                                    </div>
                                    <div class="sg-content-box__content">
                                        <div
                                            class="brn-menu-panel__scrollable brn-menu-panel__scrollable--xshort js-scrollable-container">
                                            <ul class="sg-list sg-list--spaced-elements js-items-container"></ul>
                                        </div>
                                    </div>
                                    <div class="sg-horizontal-separator sg-horizontal-separator--short-spaced"></div>
                                </div>
                            </div>
                            <div class="js-friends">
                                <div class="sg-content-box">
                                    <div class="sg-content-box__title sg-content-box__title--spaced-bottom">
                                        <div class="sg-actions-list sg-actions-list--space-between">
                                            <div class="sg-actions-list__hole">
                                                <h2 class="sg-headline sg-headline--small">Teman</h2>
                                            </div>
                                            <div class="sg-actions-list__hole">
                                                <div class="sg-search js-search-users"><input type="text"
                                                        placeholder="Cari teman" data-hj-whitelist=""
                                                        class="js-search-users-input sg-input sg-input--full-width sg-input--with-icon">
                                                    <div class="sg-search__icon"><svg
                                                            class="sg-icon sg-icon--blue sg-icon--adaptive sg-icon--x18">
                                                            <use xlink:href="#icon-search"></use>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sg-content-box__content">
                                        <div
                                            class="brn-menu-panel__scrollable brn-menu-panel__scrollable--short js-scrollable-container">
                                            <ul class="sg-list sg-list--spaced-elements js-items-container">
                                                <li class="js-loading sg-text">loading...</li>
                                            </ul>
                                            <div
                                                class="js-empty-box js-hidden brn-menu-panel__empty-message sg-text sg-text--gray">
                                                Belum ada teman
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sg-actions-list__hole sg-actions-list__hole--no-spacing sg-actions-list__hole--container">
                <div class="user-box js-logged-user-box">
                    <div class="user-box__button js-panel-button" role="button" tabindex="0" aria-label="Lihat profil">
                        <div class="sg-icon-as-button sg-icon-as-button--transparent js-panel-button-icon">
                            <div class="sg-icon-as-button__hole">
                                <div class="sg-avatar sg-avatar--small  "><img class="sg-avatar__image"
                                        src="https://id-static.z-dn.net/files/de8/654e3ea94e90184af8b1bb4eb6b54b5e.jpg"
                                        alt="RachmansyahAW" title="RachmansyahAW"></div>
                            </div>
                        </div>
                    </div>
                    <div class="sg-bubble sg-bubble--top sg-bubble--row-end user-box__menu js-panel-content js-hidden">
                        <ul class="sg-menu-list">
                            <li class="sg-menu-list__element"><a class="sg-menu-list__link" href="/users/view">
                                    Lihat profil
                                </a></li>
                            <li class="sg-menu-list__element"><a class="sg-menu-list__link" href="/users/profile">
                                    Edit profil
                                </a></li>
                            <li class="sg-menu-list__element"><a class="sg-menu-list__link" href="/logout">
                                    Keluar
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</nav>