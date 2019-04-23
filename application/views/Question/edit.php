<body>
    <!-- bagian tengah start -->

    <body style="background-color: #e6f2ff;">
        <div class="sg-layout__container js-main-container ">
            <div class="sg-layout__content">
                <div class="js-add-question-layout-box sg-layout__box">
                    <div class="sg-content-box js-ask-wrapper brn-editor">
                        <form class="js-ask-form" action="<?=base_url()?>question/saveEdit" method="POST">
                            <div class="sg-content-box__content sg-content-box__content--spaced-bottom">
                                <h2 class="sg-headline sg-headline--small js-toplayer-heading">Edit pertanyaan
                                </h2>
                            </div>
                            <div class="sg-content-box__content sg-content-box__content--spaced-bottom-large">
                                <div class="brn-editor__container">
                                    <textarea
                                        class="brn-editor__instance sg-textarea sg-textarea--full-width sg-textarea--xtall "
                                        name="pertanyaan" placeholder="" value="<?=$pertanyaan['pertanyaan']?>">
						</textarea>
                                </div>
                            </div>
                            <div class="brn-ask-toplayer__footer">
                                <div class="sg-content-box__actions brn-ask-toplayer__controls js-ask-toplayer-actions">
                                    <div class="brn-ask-toplayer__selects">
                                        <div class="brn-ask-toplayer__select-box">
                                            <div class="sg-select js-subject-select ">
                                                <div class="sg-select__icon">

                                                </div>
                                                <select class="sg-select__element" name="subject_id">
                                                    <option value="">Pilih mata pelajaran</option>
                                                    <option value="science">SBMPTN</option>
                                                    <option value="egzam">Ujian Nasional</option>
                                                    <option value="mathematics">Matematika</option>
                                                    <option value="indonesian-lang">B. Indonesia</option>
                                                    <option value="ethics">PPKn</option>
                                                    <option value="politics">IPS</option>
                                                    <option value="biology">Biologi</option>
                                                    <option value="physics">Fisika</option>
                                                    <option value="history">Sejarah</option>
                                                    <option value="english">B. inggris</option>
                                                    <option value="art">Seni</option>
                                                    <option value="chemistry">Kimia</option>
                                                    <option value="geography">Geografi</option>
                                                    <option value="technology">TI</option>
                                                    <option value="administration">Ekonomi</option>
                                                    <option value="arabic">B. Arab</option>
                                                    <option value="language">B. Daerah</option>
                                                    <option value="physical-education">Penjaskes</option>
                                                    <option value="sociology">Sosiologi</option>
                                                    <option value="wos">Bahasa lain</option>
                                                    <option value="business">Wirausaha</option>
                                                    <option value="accountancy">Akuntansi</option>
                                                    <option value="japanese">B. jepang</option>
                                                    <option value="chinese">B. mandarin</option>
                                                    <option value="french">B. perancis</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sg-content-box__actions js-ask-toplayer-actions">
                                    <button class="sg-button-primary sg-button-primary--alt js-submit-question"
                                        type="submit">Tanyakan pertanyaanmu</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="sg-layout__aside-content sg-hide-for-medium-down">
                <h1 class="sg-text-bit js-add-question-right-text"> 80% jawaban diberikan dalam 10 menit
                </h1>
            </div>
        </div>
    </body>