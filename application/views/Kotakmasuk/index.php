<!DOCTYPE html>
<html>

<head>
    <title>Kotak masuk</title>
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
    <script src="https://styleguide.brainly.com/images/icons-d4009d7e19.js" async=""></script>
    <script src="https://styleguide.brainly.com/images/subjects-icons-0676dae371.js" async=""></script>
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
<!-- bagian field tengah -->
<body style="background-color: #e6f2ff;">
    <div class="sg-layout__container js-main-container">
        <div class="sg-layout__content sg-layout__content--no-max-width">
            <div class="js-message-box">
                <div class="sg-content-box sg-content-box--spaced-bottom-large sg-hide-for-small-only"></div>
                <div class="sg-content-box sg-hide-for-medium-up">
                    <div class="sg-box sg-box--blue-secondary sg-box--full sg-box--no-border-radius sg-box--no-border">
                        <div class="sg-box__close js-message-box-close">
                            <svg class="sg-icon sg-icon--dark sg-icon--x10">
                                <use xlink:href="#icon-x">
                                    
                                </use>
                            </svg>
                        </div>
                        <div class="sg-box__hole">
                            <div class="sg-actions-list sg-actions-list--to-top sg-actions-list--no-wrap"><div class="sg-actions-list__hole">
                                <div class="sg-avatar sg-avatar--spaced">
                                    <img class="sg-avatar__image" src="//brainly.com/app/../app/img/icons/icon_information_round.svg"></div>
                                </div>
                                <div class="sg-actions-list__hole sg-actions-list__hole--grow">
                                    <div class="sg-content-box">
                                        <div class="sg-content-box__content sg-content-box__content--spaced-bottom-xsmall sg-content-box__content--spaced-top-small">
                                            <div class="sg-text sg-text--small sg-text--bold">
                                                Brainly will be getting rid of private messages and profile comments.
                                            </div>
                                        </div>
                        <div class="sg-content-box__content sg-content-box__content--spaced-bottom-small">
                            <div class="sg-text sg-text--small">
                        Brainly will be getting rid of private messages and profile comments.
                        <a href="https://faq.brainly.com/hc/en-us/articles/360001227690-Brainly-will-be-getting-rid-of-private-messages-and-profile-comments-" target="_blank" class="sg-text sg-text--bold sg-text--small sg-text--gray sg-text--link">Please read out blog post for more details.</a>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sg-layout__box">
    <div id="private-messages-container" class="brn-messages js-private-messages brn-messages--open" data-conversation-id="0" data-user-id="0">
        <section style="box-sizing: box-border;"class="brn-messages__conversations js-conversations-panel">
            <div class="sg-content-box dock-box">
                <div class="sg-content-box__header dock-box__top"><h2 class="sg-headline sg-headline--small">
                        Messages
                        </h2>
                    </div>
                    <div class="sg-content-box__content sg-content-box__content--full"><ul class="sg-list js-conversations brn-messages__list">
                        
                    </ul>
                </div>
                <div class="sg-content-box__actions">
                    <div class="sg-text sg-text--small brn-messages__tip">
                        To start a conversation, choose a user from <svg class="sg-icon sg-icon--gray-secondary sg-icon--x16">
                            <use xlink:href="#icon-profile">
                                
                            </use>
                        </svg> or go to the user's profile.
                        </div>
                    </div>
                </div>
            </section>
            <section class="brn-messages__chatbox brn-chatbox js-chatbox">
                                

                            <section data-user-id="">

                                <div>

                                    
                                        <h3 class="sg-headline sg-headline--large sg-headline--extra-bold sg-hide-for-small-only">
                                            No messages.
                                        </h3>
                                        <h3 class="sg-headline sg-headline--large sg-hide-for-medium-up">
                                            No messages.
                                        </h3>

                                    
                                    
                                        <h4 class="sg-text-block sg-text-block--gray">
                                            Go to someone's profile to invite them to a conversation.
                                        </h4>

                                    
                                                
                                </div>
                            </section>
                        </section></div></div></div></div>
                        </body>
                        </html>

