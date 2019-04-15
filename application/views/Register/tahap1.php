<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
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


</head>
<!-- navbar start-->
<nav class="navbar navbar-light" style="background-color: #3399ff;  box-shadow: 1px 1px 10px grey;">
    <a class="navbar-brand" href="#">
        <img src="assets\imgs\800px-Brainly_logo.png" width="90" height="40" alt="askly">
    </a>
    <span class="navbar-brand mb-0 h1"></span>
    <button class="btn btn-dark" style="border-radius: 10px; box-shadow: 1px 1px 10px grey" href="#">login</button>
</nav>
<!-- navbar end-->
<!-- bagian tengah start -->

<body style="background-color: #e6f2ff;">
    <div class="sg-layout__container js-main-container sg-layout__container--reversed-order">
        <div class="sg-layout__content sg-hide-for-medium-down">
            <div class="sg-content-box">
                <div class="sg-content-box__title sg-content-box__title--spaced-top-large">
                    <h1 class="sg-text-bit sg-text-bit--blue-secondary sg-text-bit--large">Selangkah <br> lagi untuk
                        <br> berbagi ilmu</h1>
                </div>
            </div>
        </div>
        <div class="sg-layout__aside-content">
            <form action="" method="post">
                <div class="js-signup-react">
                    <div class="sg-box sg-box--no-border sg-box--full">
                        <div class="sg-box__hole">
                            <!-- tahap 1 registrasi -->
                            <div id="tahap1" class="sg-content-box sg-content-box--full">
                                <div class="sg-content-box sg-content-box--spaced-bottom-large">
                                    <div class="sg-content-box sg-content-box--spaced-bottom-small">
                                        <h1 class="sg-headline sg-headline--small sg-headline--to-left" id="formTitle">
                                            Buat akun di Askly!
                                        </h1>
                                    </div>
                                    <div class="sg-text sg-text--small sg-text--gray sg-text--to-left">Agan telah
                                        memiliki akun? <span data-test="form-login-link"
                                            class="sg-text sg-text--small sg-text--link sg-text--bold sg-text--blue-dark">Masuk
                                            di sini</span>
                                    </div>
                                </div>
                                <button class="sg-button-primary sg-button-primary--full-width sg-button-primary--fb">
                                    Dengan Facebook</button>
                                <div class="sg-content-box sg-content-box--spaced-top sg-content-box--spaced-bottom">
                                    <div
                                        class="sg-text sg-text--small sg-text--gray sg-text--bold sg-text--uppercase sg-text--to-center">
                                        atau
                                    </div>
                                </div>
                                <div>
                                    <button
                                        class="sg-button-primary sg-button-primary--full-width sg-button-primary--dark"
                                        id="btnEmail">
                                        Daftar dengan email
                                    </button>
                                </div>
                            </div>
                            <!-- tahap 2 registrasi -->
                            <div id="tahap2" class="sg-content-box sg-content-box--full">
                                <div class="sg-content-box sg-content-box--spaced-bottom-large">
                                    <div class="sg-content-box sg-content-box--spaced-bottom-small">
                                        <h1 class="sg-headline sg-headline--small sg-headline--to-left">Daftar dengan
                                            email
                                        </h1>
                                    </div>
                                    <div class="sg-text sg-text--small sg-text--gray sg-text--to-left">Agan telah
                                        memiliki
                                        akun? <span
                                            class="sg-text sg-text--small sg-text--link sg-text--bold sg-text--blue-dark">Masuk
                                            di sini</span></div>
                                </div>
                                <div class="sg-content-box sg-content-box--spaced-bottom-large">
                                    <div class="sg-content-box"><label for="username"
                                            class="sg-text sg-text--xsmall sg-text--bold sg-text--container">Email</label>
                                    </div><input type="email" class="sg-input sg-input--full-width"
                                        placeholder="Ketikkan alamat emailmu" name="username" value="">
                                    <div class="sg-content-box sg-content-box--spaced-top-small">
                                        <div class="sg-text sg-text--small sg-text--peach sg-text--bold"></div>
                                    </div>
                                </div><button id="btnLanjut"
                                    class="sg-button-primary sg-button-primary sg-button-primary--full-width sg-button-primary--dark">Lanjutkan</button>
                            </div>
                            <!-- tahap 3 registrasi -->
                            <div id="tahap3" class="sg-content-box sg-content-box--full">
                                <div class="sg-content-box sg-content-box--spaced-bottom-large">
                                    <div class="sg-content-box sg-content-box--spaced-bottom-small">
                                        <h1 class="sg-headline sg-headline--small sg-headline--to-left">Daftar dengan
                                            email
                                        </h1>
                                    </div>
                                    <div class="sg-text sg-text--small sg-text--gray sg-text--to-left">Agan telah
                                        memiliki
                                        akun? <span
                                            class="sg-text sg-text--small sg-text--link sg-text--bold sg-text--blue-dark">Masuk
                                            di sini</span></div>
                                </div>
                                <div class="sg-content-box sg-content-box--spaced-bottom">
                                    <div class="sg-content-box"><label for="nick"
                                            class="sg-text sg-text--xsmall sg-text--bold sg-text--container">Nama
                                            panggilan
                                            <div class="brn-required-mark"></div></label></div><input type="text"
                                        class="sg-input sg-input sg-input--full-width"
                                        placeholder="Pilih nama panggilan" name="nick">
                                </div>
                                <div class="sg-content-box sg-content-box--spaced-bottom">
                                    <div
                                        class="sg-content-box sg-content-box--full sg-content-box--spaced-top-xsmall sg-content-box--spaced-bottom-xsmall">
                                        <div class="sg-actions-list sg-actions-list--space-between">
                                            <div class="sg-actions-list__hole"><label for="password"
                                                    class="sg-text sg-text--xsmall sg-text--bold sg-text--container">Password
                                                </label></div>
                                            <div class="sg-actions-list__hole"><span
                                                    class="sg-text sg-text--xsmall sg-text--link-unstyled sg-text--bold">
                                                    Tunjukan password</span>
                                            </div>
                                        </div>
                                    </div><input type="password" class="sg-input sg-input--full-width"
                                        placeholder="Pilih kata sandi" name="password" value="">
                                </div>
                                <div class="sg-content-box sg-content-box--spaced-bottom">
                                    <div class="sg-content-box"><label for="country"
                                            class="sg-text sg-text--xsmall sg-text--bold sg-text--container">Negara
                                        </label></div>
                                    <div class="sg-select sg-select--valid sg-select--full-width">
                                        <select class="sg-select__element" id="country" name="country">
                                            <option value="AD">Andorra</option>
                                            <option value="AE">دولة الإمارات العربية المتحدة</option>
                                            <option value="AF">افغانستان</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AL">Shqipëria</option>
                                            <option value="AM">Հայաստան</option>
                                            <option value="AO">Angola</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AT">Österreich</option>
                                            <option value="AU">Australia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AX">Åland</option>
                                            <option value="AZ">Azərbaycan</option>
                                            <option value="BA">Bosna i Hercegovina</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BE">België</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BG">България</option>
                                            <option value="BH">‏البحرين</option>
                                            <option value="BI">Burundi</option>
                                            <option value="BJ">Bénin</option>
                                            <option value="BL">Saint-Barthélemy</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BN">Negara Brunei Darussalam</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BQ">Bonaire</option>
                                            <option value="BR">Brasil</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BT">ʼbrug-yul</option>
                                            <option value="BV">Bouvetøya</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BY">Белару́сь</option>
                                            <option value="BZ">Belize</option>
                                            <option value="CA">Canada</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CD">République démocratique du Congo</option>
                                            <option value="CF">Ködörösêse tî Bêafrîka</option>
                                            <option value="CG">République du Congo</option>
                                            <option value="CH">Schweiz</option>
                                            <option value="CI">Côte d'Ivoire</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CL">Chile</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CN">中国</option>
                                            <option value="CO">Colombia</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CV">Cabo Verde</option>
                                            <option value="CW">Curaçao</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CY">Κύπρος</option>
                                            <option value="CZ">Česká republika</option>
                                            <option value="DE">Deutschland</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DK">Danmark</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">República Dominicana</option>
                                            <option value="DZ">الجزائر</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EE">Eesti</option>
                                            <option value="EG">مصر‎</option>
                                            <option value="EH">الصحراء الغربية</option>
                                            <option value="ER">ኤርትራ</option>
                                            <option value="ES">España</option>
                                            <option value="ET">ኢትዮጵያ</option>
                                            <option value="FI">Suomi</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FK">Falkland Islands</option>
                                            <option value="FM">Micronesia</option>
                                            <option value="FO">Føroyar</option>
                                            <option value="FR">France</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GE">საქართველო</option>
                                            <option value="GF">Guyane française</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GL">Kalaallit Nunaat</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GN">Guinée</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GQ">Guinea Ecuatorial</option>
                                            <option value="GR">Ελλάδα</option>
                                            <option value="GS">South Georgia</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GU">Guam</option>
                                            <option value="GW">Guiné-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HK">香港</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HR">Hrvatska</option>
                                            <option value="HT">Haïti</option>
                                            <option value="HU">Magyarország</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IE">Éire</option>
                                            <option value="IL">יִשְׂרָאֵל</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IN">India/इंडिया</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="IQ">العراق</option>
                                            <option value="IR">ایران</option>
                                            <option value="IS">Ísland</option>
                                            <option value="IT">Italia</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JO">الأردن</option>
                                            <option value="JP">日本</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KG">Кыргызстан</option>
                                            <option value="KH">Kâmpŭchéa</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KM">Komori</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="KP">북한</option>
                                            <option value="KR">대한민국</option>
                                            <option value="KW">الكويت</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="KZ">Қазақстан</option>
                                            <option value="LA">ສປປລາວ</option>
                                            <option value="LB">لبنان</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LK">śrī laṃkāva</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LT">Lietuva</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="LV">Latvija</option>
                                            <option value="LY">‏ليبيا</option>
                                            <option value="MA">المغرب</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MD">Moldova</option>
                                            <option value="ME">Црна Гора</option>
                                            <option value="MF">Saint-Martin</option>
                                            <option value="MG">Madagasikara</option>
                                            <option value="MH">M̧ajeļ</option>
                                            <option value="MK">Македонија</option>
                                            <option value="ML">Mali</option>
                                            <option value="MM">Myanma</option>
                                            <option value="MN">Монгол улс</option>
                                            <option value="MO">澳門</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">موريتانيا</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MT">Malta</option>
                                            <option value="MU">Maurice</option>
                                            <option value="MV">Maldives</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MX">México</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MZ">Moçambique</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NC">Nouvelle-Calédonie</option>
                                            <option value="NE">Niger</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NL">Nederland</option>
                                            <option value="NO">Norge</option>
                                            <option value="NP">नपल</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NU">Niuē</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="OM">عمان</option>
                                            <option value="PA">Panamá</option>
                                            <option value="PE">Perú</option>
                                            <option value="PF">Polynésie française</option>
                                            <option value="PG">Papua Niugini</option>
                                            <option value="PH">Pilipinas</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PL">Polska</option>
                                            <option value="PM">Saint-Pierre-et-Miquelon</option>
                                            <option value="PN">Pitcairn Islands</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="PS">فلسطين</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PW">Palau</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="QA">قطر</option>
                                            <option value="RE">La Réunion</option>
                                            <option value="RO">România</option>
                                            <option value="RS">Србија</option>
                                            <option value="RU">Россия</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="SA">العربية السعودية</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SD">السودان</option>
                                            <option value="SE">Sverige</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SH">Saint Helena</option>
                                            <option value="SI">Slovenija</option>
                                            <option value="SJ">Svalbard og Jan Mayen</option>
                                            <option value="SK">Slovensko</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SM">San Marino</option>
                                            <option value="SN">Sénégal</option>
                                            <option value="SO">Soomaaliya</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ST">São Tomé e Príncipe</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="SX">Sint Maarten</option>
                                            <option value="SY">سوريا</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TD">Tchad</option>
                                            <option value="TF">Territoire des Terres australes et antarctiques fr
                                            </option>
                                            <option value="TG">Togo</option>
                                            <option value="TH">ประเทศไทย</option>
                                            <option value="TJ">Тоҷикистон</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TM">Türkmenistan</option>
                                            <option value="TN">تونس</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TR">Türkiye</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="TW">臺灣</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="UA">Україна</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="US">United States</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">O‘zbekiston</option>
                                            <option value="VA">Vaticano</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VG">British Virgin Islands</option>
                                            <option value="VI">United States Virgin Islands</option>
                                            <option value="VN">Việt Nam</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="WF">Wallis et Futuna</option>
                                            <option value="WS">Samoa</option>
                                            <option value="XK">Republika e Kosovës</option>
                                            <option value="YE">اليَمَن</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sg-content-box sg-content-box--spaced-bottom">
                                    <div class="sg-content-box"><label
                                            class="sg-text sg-text--xsmall sg-text--bold sg-text--container">Tanggal
                                            lahir
                                        </label></div>
                                    <div
                                        class="sg-actions-list sg-actions-list--space-between sg-actions-list--no-wrap">
                                        <div class="sg-actions-list__hole sg-actions-list__hole--grow">
                                            <div class="sg-select sg-select--full-width">
                                                <div class="sg-select__icon"></div><select class="sg-select__element"
                                                    name="month">
                                                    <option value="0">Bulan</option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="sg-actions-list__hole sg-actions-list__hole--grow">
                                            <div class="sg-select sg-select--full-width">
                                                <div class="sg-select__icon"></div><select class="sg-select__element"
                                                    name="day">
                                                    <option value="0">Hari</option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="sg-actions-list__hole sg-actions-list__hole--grow">
                                            <div class="sg-select sg-select--full-width">
                                                <div class="sg-select__icon"></div><select class="sg-select__element"
                                                    name="year">
                                                    <option value="0">Tahun</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1958">1958</option>
                                                    <option value="1957">1957</option>
                                                    <option value="1956">1956</option>
                                                    <option value="1955">1955</option>
                                                    <option value="1954">1954</option>
                                                    <option value="1953">1953</option>
                                                    <option value="1952">1952</option>
                                                    <option value="1951">1951</option>
                                                    <option value="1950">1950</option>
                                                    <option value="1949">1949</option>
                                                    <option value="1948">1948</option>
                                                    <option value="1947">1947</option>
                                                    <option value="1946">1946</option>
                                                    <option value="1945">1945</option>
                                                    <option value="1944">1944</option>
                                                    <option value="1943">1943</option>
                                                    <option value="1942">1942</option>
                                                    <option value="1941">1941</option>
                                                    <option value="1940">1940</option>
                                                    <option value="1939">1939</option>
                                                    <option value="1938">1938</option>
                                                    <option value="1937">1937</option>
                                                    <option value="1936">1936</option>
                                                    <option value="1935">1935</option>
                                                    <option value="1934">1934</option>
                                                    <option value="1933">1933</option>
                                                    <option value="1932">1932</option>
                                                    <option value="1931">1931</option>
                                                    <option value="1930">1930</option>
                                                    <option value="1929">1929</option>
                                                    <option value="1928">1928</option>
                                                    <option value="1927">1927</option>
                                                    <option value="1926">1926</option>
                                                    <option value="1925">1925</option>
                                                    <option value="1924">1924</option>
                                                    <option value="1923">1923</option>
                                                    <option value="1922">1922</option>
                                                    <option value="1921">1921</option>
                                                    <option value="1920">1920</option>
                                                    <option value="1919">1919</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sg-content-box sg-content-box--spaced-top-large">
                                    <button type
                                        class="sg-button-primary sg-button-primary sg-button-primary--full-width sg-button-primary--dark">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
</body>