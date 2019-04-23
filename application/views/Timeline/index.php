<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meat charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $title ?></title>
        <link rel="shortcut icon" type="image/png" href="<?=base_url()?>assets\imgs\fav.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?=base_url()?>assets\css\bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets\css\home.css">
        <script src="<?=base_url()?>assets\js\bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets\js\jquery.min.js"></script>
        <link href="<?=base_url()?>assets\css\sentuhan.css" rel="stylesheet">





</head>
<!-- bagian tengah start -->

<!-- bagian tengah -->

<body style="background-color: #e6f2ff;">
    <div class="js-feed">
        <div>
            <div class="sg-layout">
                <div class="sg-layout__container">
                    <div class="sg-layout__secondary-content">
                    </div>
                    <div class="sg-layout__content">
                        <div>
                            <div class="sg-layout__box">
                                <div class="sg-content-box sg-content-box--spaced js-above-feed-ask-question">
                                    <div class="sg-content-box__title">
                                        <div class="sg-actions-list">
                                            <div class="sg-actions-list__hole">
                                                <div class="sg-avatar sg-avatar--normal sg-avatar--spaced">
                                                    <img class="sg-avatar__image"
                                                        src="https://brainly.com/app/img/icons/icon_brain_round.png"
                                                        alt="The Brain" title="The Brain">
                                                </div>
                                            </div>
                                            <div class="sg-actions-list__hole">
                                                <ul class="sg-breadcrumb-list">
                                                    <li class="sg-breadcrumb-list__element">
                                                        <span
                                                            class="sg-text sg-text--small sg-text--gray sg-text--bold">The
                                                            Brain</span>
                                                    </li>
                                                    <li class="sg-breadcrumb-list__element">
                                                        <span
                                                            class="sg-text sg-text--small sg-text--gray sg-text--bold">Answerer</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sg-content-box__content sg-content-box__content--spaced-bottom-large">
                                        <h1 class="sg-headline sg-headline--xxlarge sg-headline--extra-bold">What do you
                                            need to know?</h1>
                                    </div>
                                    <div class="sg-content-box__content sg-content-box__content--spaced-bottom-xlarge">
                                        <a href="<?=base_url()?>question/"
                                            class="sg-button-primary sg-button-primary--alt">Ask your
                                            question</a>
                                    </div>
                                </div>
                            </div>
                            <div class="js-feed-stream">
                                <div class="sg-content-box">
                                    <div class="sg-content-box__content sg-content-box__content--spaced-bottom">
                                        <div class="sg-actions-list">
                                            <div class="sg-actions-list__hole sg-actions-list__hole--grow">
                                                <div class="sg-content-box">
                                                    <div
                                                        class="sg-content-box__content sg-content-box__content--spaced-bottom">
                                                        <div
                                                            class="sg-select sg-select--capitalized sg-select--full-width">
                                                            <div class="sg-select__icon">
                                                            </div><select class="sg-select__element">
                                                                <option value="0">All subjects</option>
                                                                <option value="2">Mathematics</option>
                                                                <option value="5">History</option>
                                                                <option value="1">English</option>
                                                                <option value="8">Biology</option>
                                                                <option value="18">Chemistry</option>
                                                                <option value="15">Physics</option>
                                                                <option value="3">Social Studies</option>
                                                                <option value="31">Advanced Placement (AP)</option>
                                                                <option value="32">SAT</option>
                                                                <option value="7">Geography</option>
                                                                <option value="6">Health</option>
                                                                <option value="21">Arts</option>
                                                                <option value="4">Business</option>
                                                                <option value="19">Computers and Technology</option>
                                                                <option value="29">French</option>
                                                                <option value="30">German</option>
                                                                <option value="28">Spanish</option>
                                                                <option value="22">World Languages</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sg-actions-list__hole sg-actions-list__hole--to-end">
                                                <div class="sg-content-box">
                                                    <div
                                                        class="sg-content-box__content sg-content-box__content--spaced-bottom">
                                                        <div
                                                            class="sg-select sg-select--capitalized sg-select--full-width">
                                                            <div class="sg-select__icon">
                                                            </div>
                                                            <select class="sg-select__element">
                                                                <option value="0">All levels </option>
                                                                <option value="2">Middle School</option>
                                                                <option value="5">High School</option>
                                                                <option value="6">College</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sg-actions-list__hole sg-actions-list__hole--to-end">
                                                <div class="sg-content-box">
                                                    <div
                                                        class="sg-content-box__content sg-content-box__content--spaced-bottom">
                                                        <div
                                                            class="sg-select sg-select--capitalized sg-select--full-width">
                                                            <div class="sg-select__icon">
                                                            </div>
                                                            <select class="sg-select__element">
                                                                <option value="ALL">all</option>
                                                                <option value="ANSWER_NEEDED">unanswered</option>
                                                                <option value="CAN_ANSWER">being answered</option>
                                                                <option value="ANSWERED">answered</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- loop php grab data element ini-->
                        <?php foreach ($questions as $q){ ?>
                        <div class="sg-box sg-box--no-border sg-box--full">
                            <div class="sg-box__hole">
                                <div class="sg-actions-list sg-actions-list--to-top sg-actions-list--no-wrap">
                                    <div class="sg-actions-list__hole">
                                        <div class="sg-content-box">
                                            <div class="sg-content-box__title sg-content-box__title--spaced-bottom">
                                                <div class="sg-avatar sg-avatar--normal sg-avatar--spaced">
                                                    <!-- link ke profile user lewat klik gambar-->
                                                    <a href="<?=base_url()?>users/profile/<?=$q->idUser?>">
                                                        <!-- ava user untuk tiap pos, kasih default aja dulu aja semua avanya-->
                                                        <img class="sg-avatar__image"
                                                            src="<?=base_url()?>assets/imgs/avatar/<?=$q->avatar?>">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" sg-actions-list__hole sg-actions-list__hole--grow">
                                        <div class="sg-content-box">
                                            <div class="sg-content-box__title sg-content-box__title--spaced-bottom">
                                                <div class="sg-actions-list sg-actions-list--no-wrap">
                                                    <div class="sg-content-box">
                                                        <div class="sg-actions-list__hole">
                                                            <div class="sg-content-box__content">
                                                                <ul
                                                                    class="sg-breadcrumb-list sg-breadcrumb-list--short">
                                                                    <li class="sg-breadcrumb-list__element">
                                                                        <span
                                                                            class="sg-text sg-text--small sg-text--gray sg-text--bold">
                                                                            <span
                                                                                class="sg-text sg-text--small sg-text--link sg-text--bold sg-text--gray"><?=$q->mapel?></span>
                                                                        </span>
                                                                    </li>
                                                                    <li class="sg-breadcrumb-list__element">
                                                                        <!-- jadiin tanggal aja -->
                                                                        <span
                                                                            class="sg-text sg-text--small sg-text--gray sg-text--bold"><?=$q->tanggal?>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sg-content-box__content sg-content-box__content--full">
                                                <div
                                                    class="sg-actions-list sg-actions-list--to-top sg-actions-list--no-wrap">
                                                    <div
                                                        class="sg-actions-list__hole sg-actions-list__hole--hide-overflow">
                                                        <a data-test="feed-item-link" href="/question/12524274"
                                                            class="sg-text sg-text--link-unstyled sg-text--bold">
                                                            <p class="sg-text sg-text--break-words">
                                                                <!-- String pertanyaan-->
                                                                <span><?= $q->pertanyaan ?></span>
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sg-content-box__content sg-content-box__content--spaced-top">
                                                <div class="sg-actions-list">
                                                    <div
                                                        class="sg-actions-list__hole sg-actions-list__hole--no-spacing">
                                                        <div class="brn-answers-list">
                                                            <div class="brn-answers-list__icon">
                                                                <div class="sg-icon sg-icon--light sg-icon--x14">
                                                                    <svg class="sg-icon__svg">
                                                                        <use xlink:href="#icon-answered">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="brn-answers-list__item">
                                                            </div>
                                                            <div class="brn-answers-list__dot-container">
                                                                <div class="brn-answers-list__dot">
                                                                </div>
                                                                <div class="brn-answers-list__dot">
                                                                </div>
                                                                <div class="brn-answers-list__dot">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sg-actions-list__hole sg-actions-list__hole--no-spacing">
                                                </div>
                                                <div class="sg-actions-list__hole sg-actions-list__hole--no-spacing">
                                                    <div class="brn-presence-list">
                                                        <div class="brn-presence-list__icon">
                                                        </div>
                                                        <div class="brn-presence-list__item">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sg-actions-list__hole sg-actions-list__hole--to-right">
                                            <!-- tombol jawab-->
                                            <a href="#"
                                                class="sg-button-secondary sg-button-secondary--small sg-button-secondary--inverse">Answer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>


</body>