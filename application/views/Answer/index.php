<body style="background-color: #e6f2ff;">
    <div class="sg-layout__container js-main-container">
        <div class="sg-layout__content">
            <div id="main-content" role="main">
                <div class="sg-layout__box">
                    <article id="question" class="brn-question js-question js-main-question"
                        data-z="{&quot;id&quot;: &quot;22679088&quot;}" data-quality-tier="3"
                        data-question-id="22679088">
                        <div class="sg-content-box sg-content-box--spaced-top-small">
                            <div class="sg-actions-list sg-actions-list--no-wrap">
                                <div class="js-asker-avatar sg-actions-list__hole sg-hide-for-small-only">
                                    <div class="sg-avatar   ">
                                        <!-- avatar penanya -->
                                        <span class="sg-text sg-text--blue sg-text--small sg-text--bold sg-text--link"
                                            role="link">
                                            <div class="sg-avatar__image sg-avatar__image--icon">
                                                <img src="<?=base_url()?>assets\imgs\avatar\<?=$question['avatar']?>"
                                                    alt="">
                                            </div>
                                        </span>
                                        <!-- avatar penanya end -->
                                    </div>
                                </div>
                                <div class="sg-actions-list__hole">
                                    <ul class="sg-breadcrumb-list js-question-breadcrumbs" itemscope=""
                                        itemtype="http://schema.org/BreadcrumbList">
                                        <li class="sg-breadcrumb-list__element" itemprop="itemListElement" itemscope=""
                                            itemtype="http://schema.org/ListItem">
                                            <a itemprop="item" href="#"
                                                class="sg-text sg-text--bold sg-text--link sg-text--small sg-text--gray">
                                                <span itemprop="name"><?=$question['tingkat']?></span>
                                            </a>
                                            <meta itemprop="position" content="1">
                                        </li>
                                        <li class="sg-breadcrumb-list__element" itemprop="itemListElement" itemscope=""
                                            itemtype="http://schema.org/ListItem">
                                            <a itemprop="item" href="#"
                                                class="sg-text sg-text--bold sg-text--link sg-text--small sg-text--gray">
                                                <span itemprop="name"> - <?=$question['mapel']?></span>
                                            </a>
                                            <meta itemprop="position" content="2">
                                        </li>
                                        <li class="sg-breadcrumb-list__element"><span
                                                class="sg-text sg-text--bold sg-text--small sg-text--gray"> - 5 Poin
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <?php
                                if($punyaSendiri == 1){
                                ?>
                                <div
                                    class="sg-actions-list__hole sg-actions-list__hole--no-shrink sg-actions-list__hole--to-right">
                                    <a
                                        href="<?=base_url()?>question/edit?idtanya=<?=$question['idTanya']?>&idUser=<?=$question['idUser']?>">
                                        <button title="Edit" class="btn btn-info">Edit</button>
                                    </a>
                                    <a
                                        href="<?=base_url()?>question/hapus?idtanya=<?=$question['idTanya']?>&idUser=<?=$question['idUser']?>">
                                        <button title="Hapus" class="btn btn-danger">Delete</button>
                                    </a>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div
                                class="js-question-content sg-content-box__content sg-content-box__content--spaced-bottom sg-content-box__content--spaced-top-small">
                                <div class="brn-content-image">
                                    <h1 class="sg-text sg-text--large sg-text--regular">
                                        <?=$question['pertanyaan']?>
                                    </h1>
                                </div>
                            </div>
                            <div class="sg-content-box__content sg-content-box__content--spaced-bottom">

                            </div>
                        </div>
                        <div
                            class="sg-box sg-box--full sg-box--gray-secondary-lightest sg-box--xsmall-padding sg-box--no-border js-comments ">
                            <div class="sg-content-box sg-content-box--full">
                                <div class="sg-list sg-list--spaced-elements">
                                    <div class="sg-list__element">
                                        <div class="sg-actions-list sg-actions-list--no-wrap">
                                            <div class="sg-actions-list__hole">
                                                <div class="sg-avatar sg-avatar--small  ">
                                                    <div class="sg-avatar__image sg-avatar__image--icon">
                                                        <img src="<?=base_url()?>assets\imgs\avatar\<?=$avatar?>"
                                                            alt="<?=$user['nama']?>" title="<?=$user['nama']?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sg-actions-list__hole sg-actions-list__hole--grow">
                                                <!-- form jawaban -->
                                                <form class="sg-search" method="POST"
                                                    action="<?=base_url()?>answer/addAnswer?idtanya=<?=$question['idTanya']?>&iduser=<?=$question['idUser']?>">
                                                    <img src="" alt="">
                                                    <input required=""
                                                        class="sg-input sg-search__input sg-input--full-width  js-top-search-input"
                                                        name="jawaban" type="text" placeholder="Apa jawabanmu?"
                                                        data-hj-whitelist="" aria-label="Cari">
                                                </form>
                                                <!-- form jawaban end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- jawaban -->
            </div>
            <div class="sg-layout__box">
                <div class="brn-still-not-sure-promo-box">
                    <div class="sg-content-box sg-content-box--spaced">
                        <div class="sg-content-box__header">
                            <div class="brn-still-not-sure-promo-box__avatar-wrapper sg-avatar"><img
                                    class="sg-avatar__image"
                                    src="//brainly.co.id/app/../app/img/icons/icon_brain_round.png" alt="Mahaguru">
                            </div>
                            <ul class="sg-breadcrumb-list">
                                <li class="sg-breadcrumb-list__element"><span
                                        class="sg-text sg-text--small sg-text--bold sg-text--gray">Mahaguru</span></li>
                                <li class="sg-breadcrumb-list__element"><span
                                        class="sg-text sg-text--small sg-text--bold sg-text--gray">Penolong</span></li>
                            </ul>
                        </div>
                        <div
                            class="brn-still-not-sure-promo-box__content-wrapper sg-content-box__content sg-content-box__content--spaced-bottom-large">
                            <div
                                class="sg-headline sg-headline--xxlarge sg-headline--extra-bold sg-hide-for-small-only">
                                Hai! Masih tidak yakin dengan jawabannya?
                            </div>
                            <div class="sg-headline sg-headline--xxlarge sg-hide-for-medium-up">
                                Hai! Masih tidak yakin dengan jawabannya?
                            </div>
                        </div>
                        <div class="sg-content-box__actions"><a href="#"
                                class="sg-button-primary sg-button-primary--alt js-still-not-sure-box-cta">
                                Periksa jawaban serupa
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="sg-layout__aside-content js-aside-content">
            <div class="js-react-question-add-aside">
                <div class="sg-box sg-box--full sg-box--small-padding sg-box--no-border sg-hide-for-medium-down">
                    <div class="sg-box__hole">
                        <div class="sg-content-box">
                            <div
                                class="sg-content-box__content sg-content-box__content--spaced-bottom sg-content-box__content--with-centered-text">
                                <h3 class="sg-headline sg-headline--extra-bold sg-hide-for-small-only">
                                    Masih Belum Yakin?
                                </h3>
                            </div>
                            <div class="sg-content-box__actions sg-content-box__actions--with-centered-elements"><a
                                    class="sg-button-primary sg-button-primary--alt js-show-add-question-modal"
                                    href="<?=base_url()?>question">
                                    Tanya sekarang
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brn-add-question-floating-btn sg-hide-for-medium-up js-add-question-floating-btn">
                <a href="/question/add?entry=1620" class="sg-button-primary-round">
                    <div class="sg-button-primary-round__icon"><svg class="sg-icon sg-icon--x20  ">
                            <use xlink:href="#icon-plus"></use>
                        </svg></div><span class="sg-button-primary-round__label brn-add-question-floating-btn__label">
                        Tanyakan pertanyaanmu
                    </span>
                </a></div>
        </aside>
    </div>
    </div>
    <div class="brn-ads-box brn-ads-box--rectangle js-hide-when-video-ad-plays">
        <div class="brn-ads-box js-rtk-ad-unit  js-hidden"
            data-generic-ad-unit-id="question-pg_rect_below-question-left"
            data-test="question-pg_rect_below-question-left"></div>
        <div class="brn-ads-box js-rtk-ad-unit  js-hidden"
            data-generic-ad-unit-id="question-pg_rect_below-question-right"
            data-test="question-pg_rect_below-question-right"></div>
    </div>


    -</div>

</body>