<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <link rel="shortcut icon" type="image/png" href="<?=base_url()?>assets\imgs\fav.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=base_url()?>assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets\css\home.css">
    <script src="<?=base_url()?>assets\js\bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets\js\jquery.min.js"></script>
    <link href="<?=base_url()?>assets\css\sentuhan.css" rel="stylesheet">
    <script>
    $(document).ready(function() {
        $('#tahap2').hide();
        $('#tahap3').hide();
        $("#btnEmail").click(function() {
            $('#tahap1').hide();
            $('#tahap3').show();
        });
    });
    </script>

</head>
<!-- navbar start-->
<div class="sg-header__container">
    <div class="sg-header__content">
        <div class="sg-header__left">
            <a href="/" class="sg-home-button" title="Brainly.com - For students. By students.">
                <img class="sg-home-button__logo-small" src="https://styleguide.brainly.com/images/logos/brainly-mobile-426ef8718f.svg" alt="Brainly.com">
                <img class="sg-home-button__logo-big" src="https://styleguide.brainly.com/images/logos/brainly-761d75d6ea.svg" alt="Brainly.com">
            </a>
        </div>
        <div class="sg-header__middle">
            <div class="sg-content-box sg-content-box--full js-react-search-bar">
                <form class="sg-search" method="GET" action="/app/ask" role="search">
                    <input type="hidden" name="entry" value="top">
                    <input required="" class="sg-input sg-input--with-icon sg-search__input sg-input--full-width sg-input--light js-top-search-input" name="q" type="search" placeholder="What is your question?" data-hj-whitelist="" aria-label="Search">
                    <div class="sg-search__icon">
                        <svg class="sg-icon sg-icon--x18  sg-icon--adaptive">
                            <title>Search</title>
                            <use xlink:href="#icon-search">
                                
                            </use>
                        </svg>
                    </div>
                </form>
            </div>
        </div>
        <div class="sg-header__right">
            <div class="sg-actions-list">
                </div></div></div></div>
<!-- navbar end-->
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
                                <img class="sg-avatar__image" src="https://brainly.com/app/img/icons/icon_brain_round.png" alt="The Brain" title="The Brain">
                            </div>
                        </div>
                        <div class="sg-actions-list__hole">
                            <ul class="sg-breadcrumb-list">
                                <li class="sg-breadcrumb-list__element">
                                    <span class="sg-text sg-text--small sg-text--gray sg-text--bold">The Brain</span>
                                </li>
                                <li class="sg-breadcrumb-list__element">
                                    <span class="sg-text sg-text--small sg-text--gray sg-text--bold">Answerer</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sg-content-box__content sg-content-box__content--spaced-bottom-large">
                    <h1 class="sg-headline sg-headline--xxlarge sg-headline--extra-bold">What do you need to know?</h1>
                </div>
                <div class="sg-content-box__content sg-content-box__content--spaced-bottom-xlarge">
                    <a href="/question/add?entry=1610" class="sg-button-primary sg-button-primary--alt">Ask your question</a>
                </div>
            </div>
        </div>
        <div class="js-feed-stream">
            <div class="sg-content-box">
                <div class="sg-content-box__content sg-content-box__content--spaced-bottom">
                    <div class="sg-actions-list">
                        <div class="sg-actions-list__hole sg-actions-list__hole--grow">
                            <div class="sg-content-box">
                                <div class="sg-content-box__content sg-content-box__content--spaced-bottom">
                                    <div class="sg-select sg-select--capitalized sg-select--full-width">
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
                                <div class="sg-content-box__content sg-content-box__content--spaced-bottom">
                                    <div class="sg-select sg-select--capitalized sg-select--full-width">
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
                                <div class="sg-content-box__content sg-content-box__content--spaced-bottom">
                                    <div class="sg-select sg-select--capitalized sg-select--full-width">
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

</body>