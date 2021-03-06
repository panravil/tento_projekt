<?php
    $url = $_SERVER['HTTP_HOST'];
	$www   = 'www';
    $pos = strpos($url, $www);

    if ($pos === false) {
        header('Location: https://www.tentolesnypokoj.sk');
    }
?>
<!DOCTYPE html>
<html>

<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Vyhrajte každý týždeň pobyt v pokoji lesa v hodnote 1 600 eur! Alebo závesné kreslo. V období 1. 2. – 28. 3. 2022.">
    <meta name="keywords" content="tento, súťaž, pokoj">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="facebook-domain-verification" content="jrkrb7wt62ph5972yequxvodqdekiw" />
    <!-- Internal Stylesheet -->
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/font.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/plugin.css" rel="stylesheet" type="text/css">

    <title>Tento - Lesný pokoj</title>
    <!-- External Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- CookieBot Script -->
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="c953b599-8539-4912-b665-3ceb886a70df" data-blockingmode="auto" type="text/javascript"></script>


    <!-- External Script -->
    <script src="./assets/js/wow.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MM28M6V');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MM28M6V"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header-contain">
        <div class="logo-img">
            <a href="/#index">
                <img src="./assets/images/Tento-Logo.png">
            </a>
        </div>

        <div class="header-content">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="mobile-menu mhide" id="mobile-menu">
            <ul class="list-items">
                <li class="list-item"><a href="/#jak-soutezit">Ako súťažiť</a></li>
                <li class="list-item"><a href="/#Vyplnte-formular">Vyplňte formulár</a></li>
                <li class="list-item"><a href="/#o-tento">O Tento</a></li>
                <li class="list-item"><a href="/#vyherci">Výhercovia</a></li>
                <li class="list-item"><a href="https://www.tentolesnypokoj.sk/assets/pdf/Tento_pravidla_SK.pdf" target="_blank">Pravidlá</a></li>
                <li class="list-item"><a href="/#kontakt">Kontakt</a></li>
            </ul>
            </ul>
        </div>

        <div class="menu">
            <a href="/#jak-soutezit">Ako súťažiť </a>
            <a href="/#Vyplnte-formular">Vyplňte formulár</a>
            <a href="/#o-tento">O Tento</a>
            <a href="/#vyherci">Výhercovia</a>
            <a href="https://www.tentolesnypokoj.sk/assets/pdf/Tento_pravidla_SK.pdf" target="_blank">Pravidlá</a>
            <a href="/#kontakt">Kontakt</a>
        </div>
    </header>
    <main class="index">
        <span class="anchor" id="index"></span>
        <section class="banner-img">
            <h2 class="banner-text-sm  wow fadeInUp" data-wow-delay="0.3s">Vyhrajte každý týždeň <br> pobyt v&nbsp;pokoji
                lesa <br>v hodnote 1 600 eur!</h2>
            <h4 class="banner-text-bi wow fadeInUp" data-wow-delay="0.6s">Alebo závesné kreslo.</h4>
            <div class="banner-text-rd wow fadeInUp" data-wow-delay="0.9s">
                <div>Súťažíme každý
                    <br>týždeň o:<br> 1x pobyt v&nbsp;lese<br>5x závesné kreslo
                </div>
                <div>V období<br>1. 2. – 28. 3.<br>2022</div>
            </div>
            <div class="banner-text-end wow fadeInUp" data-wow-delay="1.2s">1. týždeň súťaže prebieha <label>1. 2. - 7. 2. 2022,</label><br>
                výhercov losujeme <label>8. 2. 2022.</label>
            </div>
            <div class="sheep">
                <img src="./assets/images/Lamb.png">
            </div>
            <div class="banner-img-next">
                <a href="/#jak-soutezit">
                    <span class="ca3-scroll-down-link ca3-scroll-down-arrow" data-ca3_iconfont="ETmodules"
                        data-ca3_icon="" href="/#jak-soutezit"></span>
                </a>
            </div>
        </section>
        <span class="anchor" id="jak-soutezit"></span>
        <section class="sec1" id="jak-soutezit-sec">
            <div class="sec1-title wow fadeInUp" data-wow-delay="0.3s">
                Ako súťažiť?
            </div>
            <div class="sec1-content wow fadeInUp" data-wow-delay="0.3s">
                <div>
                    <div class="compete-bule">
                        <div class="compete-title">
                            Kúpte
                        </div>
                        <div class="compete-text">
                            akýkoľvek 3-vrstvový
                        </div>
                        <div class="compete-text">
                            Tento toaletný papier
                        </div>
                        <div class="compete-sheep">
                            <img src="./assets/images/tento.png">
                        </div>
                        <img class="arrow-blue" src="./assets/images/Arrow_blue.png">
                    </div>
                    <div class="compete-pink">
                        <div class="compete-title">
                            Nahrajte
                        </div>
                        <div class="compete-text">
                            kód z účtenky nižšie v&nbsp;sekcii
                        </div>
                        <div class="compete-text">
                            Vyplňte formulár
                        </div>
                        <div class="compete-bill">
                            <img src="./assets/images/Bill 2.png">
                        </div>
                        <img class="arrow-pink" src="./assets/images/Arrow_Pink.png">
                        <img class="arrow-down" src="./assets/images/Arrow-down.png">
                    </div>
                </div>
                <div class="sec1-right">
                    <div>
                        Vyhrajte
                    </div>
                    <div>
                        týždenný pobyt v&nbsp;udržateľnom <br>ubytovaní v&nbsp;slovenskom lese<br> alebo závesné kreslo
                    </div>
                    <div>
                        <img src="./assets/images/sec1-right.png">
                    </div>
                    <div>
                        <img class="m-t-5m" src="./assets/images/Block 2_ How TO.png">
                    </div>
                    <div>
                        Viac o ubytovaní
                        <a href="https://www.wildhouse.sk/helios/" target="_blank">
                            <p>tu.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="banner-img-next">
                <a href="/#Vyplnte-formular">
                    <span class="ca3-scroll-down-link ca3-scroll-down-arrow" data-ca3_iconfont="ETmodules"
                        data-ca3_icon="" href="/#Vyplnte-formular"></span>
                </a>
            </div>
        </section>
        <span class="anchor" id="Vyplnte-formular"></span>
        <section class="sec2">
            <div class="sec2-title wow fadeInUp" data-wow-delay="0.3s">
                Vyplňte formulár
            </div>
            <div class="sec2-content wow fadeInUp" data-wow-delay="0.3s">
                <table class="data-in">
                    <tr>
                        <td>Meno:</td>
                        <td>Priezvisko:</td>
                    </tr>
                    <tr>
                        <td><input id="firstName"></td>
                        <td><input id="lastName"></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td>Telefón: </td>
                    </tr>
                    <tr>
                        <td><input id="email" onfocusout="mailValidate()"></td>
                        <td><input id="phone" type="text" oninput="this.value=this.value.replace(/[^0-9\+]/g,'');"></td>
                    </tr>
                    <tr>
                        <td>PSČ:</td>
                        <td class="receipt-pc">Kód z účtenky:
                            <div class="notification">
                                Zadajte, prosím, <span class="f-m">posledné 4 znaky kódu DKP</span> na vašej
                                účtenke,<br>
                                či posledné 4 čísla elektronickej faktúry v prípade online nákupu.<br>
                                Účtenku si schovajte, v prípade výhry ju budete potrebovať.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input id="zipCode" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="5"></td>
                        <td><input id="receiptCode" type="text" maxlength="4">
                        </td>
                    </tr>
                    <tr>
                        <td><button class="submit" onclick="send()">Odoslať</button> </td>
                        <td>
                            <div><input type="checkbox" name="check" id="check" class="question-check">
                                <label for="check">Súhlasím s&nbsp;<a href="https://www.tentolesnypokoj.sk/assets/pdf/Tento_pravidla_SK.pdf" target="_blank">pravidlami súťaže.</a></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="error" id="error">
                            Vyplňte polia označené červenou farbou a kliknite na "Odoslať".
                        </td>
                    </tr>
                </table>

                <table class="mobile-in">
                    <tr>
                        <td>Meno:</td>
                    </tr>
                    <tr>
                        <td><input id="m-firstName"></td>
                    </tr>
                    <tr>
                        <td>Priezvisko:</td>
                    </tr>
                    <tr>
                        <td><input id="m-lastName"></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                    </tr>
                    <tr>
                        <td><input id="m-email" onfocusout="mailValidate()"></td>
                    </tr>
                    <tr>
                        <td>Telefón: </td>
                    </tr>
                    <tr>
                        <td><input id="m-phone" type="text" oninput="this.value=this.value.replace(/[^0-9\+]/g,'');"></td>
                    </tr>
                    <tr>
                        <td>PSČ</td>
                    </tr>
                    <tr>
                        <td><input id="m-zipCode" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="5">
                        </td>
                    </tr>
                    <tr>
                        <td class="receipt">Kód z účtenky:
                            <div class="notification">
                                Zadajte, prosím, <span class="f-m">posledné 4 znaky kódu DKP</span> na vašej účtenke<br>
                                Účtenku si schovajte, v prípade výhry ju budete potrebovať.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input id="m-receiptCode" type="text" maxlength="4"></td>
                    </tr>
                    <tr>
                        <td><button class="mobile-submit" onclick="sendMobile()">Odoslať</button> </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <input type="checkbox" name="m-check1" id="m-check1" class="question-check"><label
                                    for="m-check1">Súhlasím s <a href="https://www.tentolesnypokoj.sk/assets/pdf/Tento_pravidla_SK.pdf" target="_blank">pravidlami súťaže.</a></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="error" id="m-error">
                            Vyplňte polia označené červenou farbou a kliknite na "Odoslať".
                        </td>
                    </tr>
                </table>
            </div>
            <div class="sec2-next">
                <a href="/#o-tento">
                    <span class="ca3-scroll-down-link ca3-scroll-down-arrowB" data-ca3_iconfont="ETmodules"
                        data-ca3_icon=""></span>
                </a>
            </div>
        </section>
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <img src="./assets/images/close-icon.png" class="close-modal" id="close-modal">
                    <div class="modal-body">
                        <div>
                            <img src="./assets/images/Tento-Logo.png">
                        </div>
                        <div id="form-success" class="modal-title">Ďakujeme vám za účasť v súťaži.</div>
                        <div class="modal-contain">Potvrdenie o doručení dostanete e-mailom. <br> Ak nie, kontaktujte
                            nás na &nbsp; <a
                                href="mailto: info@tentolesnypokoj.sk"><span>info@tentolesnypokoj.sk</span></a></div>
                        <div class="modal-contain">Účtenku si schovajte, v prípade výhry ju budete potrebovať.</div>
                    </div>
                </div>
            </div>
        </div>
        <span class="anchor" id="o-tento"></span>
        <section class="sec3">
            <div class="sec1-title wow fadeInUp" data-wow-delay="0.3s">
                O značke Tento
            </div>
            <div class="sec3-title-content wow fadeInUp" data-wow-delay="0.3s">
                <div>Víťaz voľby spotrebiteľov</div>
                <img src="./assets/images/VS 21 logo sk outline_kruh 1.png">
            </div>
            <div class="move wow fadeInUp" data-wow-delay="0.3s">
                <iframe class="fream" src="https://www.youtube.com/embed/RCOBXWnetng" frameborder="0" allowfullscreen
                    ng-show="showvideo">
                </iframe>
            </div>
            <div class="brand row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-md-6 col-lg-3">
                    <img src="./assets/images/image 1.png">
                    <div class="brand-title" style="padding: 0px 10px">O lesy sa staráme.</div>
                    <div class="brand-content" style="padding: 0px 10px">Je pre nás dôležité, aby naše drevo pochádzalo
                        z&nbsp;udržateľne
                        spravovaných lesov, ktoré rastú viac, než&nbsp;sú využívané, a&nbsp;v&nbsp;ktorých je udržiavaná biodiverzita.
                        So&nbsp;surovinami zaobchádzame šetrne.</div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="./assets/images/image 2.png">
                    <div class="brand-title" style="padding: 0px 10px">Udržateľnosť v&nbsp;každej fáze výroby.</div>
                    <div class="brand-content" style="padding: 0px 10px">Udržateľnosť zohľadňujeme pri&nbsp;každom kroku
                        našej výroby. Preto optimalizujeme využívanie vody a&nbsp;energie, aby boli čo najefektívnejšie.
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="./assets/images/image 3.png">
                    <div class="brand-title" style="padding: 0px 10px">Na obaloch záleží.</div>
                    <div class="brand-content" style="padding: 0px 10px">Dbáme na&nbsp;to, aby&nbsp;aj naše obaly boli udržateľné.
                        Za&nbsp;posledné dva roky sme o&nbsp;17&nbsp;% znížili podiel plastov v&nbsp;obaloch, v&nbsp;ktorých sú balené výrobky
                        značky Tento. Do&nbsp;roku 2030 plánujeme mať ponuku našich produktov bez plastov.</div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="./assets/images/image 4.png">
                    <div class="brand-title" style="padding: 0px 10px">Vyrábané blízko vás - lokálne.</div>
                    <div class="brand-content" style="padding: 0px 10px">Všetky produkty vyrábame v&nbsp;rozumnej
                        vzdialenosti od&nbsp;zdrojov surovín a&nbsp;od&nbsp;našich odberateľov.
                        Menšia vzdialenosť znamená menšiu potrebu prepravy tovaru a&nbsp;tým pádom aj zníženie emisií CO2.
                    </div>
                </div>
            </div>
        </section>
        <span class="anchor" id="vyherci"></span>
        <section class="sec5">
            <div class="sec1-title wow fadeInUp" data-wow-delay="0.3s">
                Výhercovia
            </div>
            <div class="sec5-content wow fadeInUp" data-wow-delay="0.3s">
                <a class="sec5-content" data-toggle="collapse" data-target="#vyherci-display">Zoznam výhercov z 1. týždňa
                    súťaže
                    <br class="sp-br" /> (1. 2. – 7. 2. 2022)</a>
            </div>

            <div id="vyherci-display" class="collapse">
                <div class="sec5-content">
                    <div class="sec5-content2"><b>Výhercov prvého týždňa súťaže zverejníme vo&nbsp;štvrtok 10.&nbsp;2.&nbsp;2022.</b><br></div>
                    <br>
                    <br>
                    <div class="sec5-content2"><b></b><br></div>
                </div>
            </div>
            </div>
            <div class="banner-img-next wow fadeInUp" data-wow-delay="0.3s">
                <a href="#kontakt">
                    <span class="ca3-scroll-down-link ca3-scroll-down-arrow" data-ca3_iconfont="ETmodules"
                        data-ca3_icon=""></span>
                </a>
            </div>
        </section>
        <span class="anchor" id="kontakt"></span>
        <section class="sec4 wow fadeInUp" id="kontakt" data-wow-delay="0.3s">
            <div class="sec2-title">
                Kontakt
            </div>
            <div>
                V prípade akýchkoľvek dotazov, či nejasností nás neváhajte kontaktovať.
            </div>
            <div>
                <a href="mailto:info@tentolesnypokoj.sk">info@tentolesnypokoj.sk</a>
            </div>
            <div>
                Informácie o spracovaní osobných údajoch a využitiu cookies nájdete
                <a href="https://www.metsagroup.com/en/Pages/cookies.aspx" target="_blank"><label>tu.</label></a>
            </div>
        </section>

        <footer>
            <div class="footer">
                <a href="http://www.facebook.com/TentoSlovensko/" target="_blank"><img
                        src="./assets/images/jam_facebook-circle.png"></a>
                <a href="https://www.instagram.com/tento_czsk/" target="_blank"><img
                        src="./assets/images/akar-icons_instagram-fill.png"></a>
                <a href="https://www.youtube.com/channel/UCMPtEmJTu3FvJp-ftoQ12DQ" target="_blank"><img
                        src="./assets/images/ant-design_youtube-outlined.png"></a>
            </div>
        </footer>

        <script>
            new WOW().init();
            $(document).ready(function () {
                $('.hamburger').on('click', function (e) {
                    e.stopPropagation();
                    $(".mobile-menu").toggleClass("mhide").toggleClass("mshow");
                });
                $('.mobile-menu').on('click', function () {
                    $(".mobile-menu").toggleClass("mhide").toggleClass("mshow");
                });
            });

            $(document).on('click', '.receipt', function (e) {
                e.stopPropagation();
                $(this).addClass('active');
            });

            $(document).on('click', '.close-modal', function (e) {
                $('#modal').modal('hide');
            });

            $(document).on('click', '.receipt-pc', function (e) {
                e.stopPropagation();
                $(this).addClass('active');
            });

            $(document).on('mouseleave', '.receipt-pc', function (e) {
                $('.receipt-pc').removeClass('active');
            });
            $(document).on('click', 'body', function (e) {
                $('.receipt').removeClass('active');
                $('.receipt-pc').removeClass('active');
                $(".mobile-menu").addClass("mhide").removeClass("mshow");
            });

            function validateEmail(email) {
                const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }

            function mailValidate() {
                var email = document.getElementById("email").value;
                var memail = document.getElementById("m-email").value;
                if (email) {
                    if (!validateEmail(email)) {
                        document.getElementById('email').style.borderColor = "red";
                    } else {
                        document.getElementById('email').style.borderColor = "#e4e4e4";
                    }
                }
                if (memail) {
                    if (!validateEmail(memail)) {
                        document.getElementById('m-email').style.borderColor = "red";
                    } else {
                        document.getElementById('m-email').style.borderColor = "#e4e4e4";
                    }
                }
            }

            function send() {
                var firstName = document.getElementById("firstName").value;
                var lastName = document.getElementById("lastName").value;
                var email = document.getElementById("email").value;
                var phone = document.getElementById("phone").value;
                var zipCode = document.getElementById("zipCode").value;
                var receiptCode = document.getElementById("receiptCode").value;
                var checkbox = $("#check").is(":checked");

                if (firstName.trim() == "" || lastName.trim() == "" || email == "" || phone == "" || zipCode == "" || zipCode.length != 5 || receiptCode == "" || receiptCode.length != 4) {
                    document.getElementById("error").innerHTML = "Vyplňte polia označené červenou farbou a kliknite na 'Odoslať'.";
                    document.getElementById("error").style.display = "revert";
                }
                else {
                    if (!validateEmail(email)) {
                        document.getElementById("error").innerHTML = "Zadajte prosím správny e-mail."
                        document.getElementById("error").style.display = "revert";
                    }
                    else if (checkbox == false) {
                        document.getElementById("error").innerHTML = "Zaškrtnite prosím: 'Súhlasím s pravidlami súťaže'.";
                        document.getElementById("error").style.display = "revert";
                    }
                    else {
                        document.getElementById("error").style.display = "none";
                        $('#modal').modal('show');
                        $.ajax({
                            type: "POST",  //type of method
                            url: "./insert.php",  //my page
                            data: { firstName: firstName, lastName: lastName, email: email, phone: phone, zipCode: zipCode, receiptCode: receiptCode },// passing the values
                            success: function (res) {
                                $.ajax({
                                    type: "POST",  //type of method
                                    url: "./PHPMailer/index.php",  //my page
                                    data: { firstName: firstName, email: email },// passing the values
                                    success: function (res) {
                                        console.log("success message");
                                    },
                                    error: function (err) {
                                        console.log(111);
                                        console.log(err);
                                    }
                                });
                                console.log("success");
                                document.getElementById("firstName").value = null;
                                document.getElementById("lastName").value = null;
                                document.getElementById("email").value = null;
                                document.getElementById("phone").value = null;
                                document.getElementById("zipCode").value = null;
                                document.getElementById("receiptCode").value = null;
                                document.getElementById("check").checked = false;
                            }
                        });
                    }
                }

                if (firstName.trim() == "" || firstName.trim() == null) { document.getElementById('firstName').style.borderColor = "red"; } else { document.getElementById('firstName').style.borderColor = "#e4e4e4"; }
                if (lastName.trim() == "" || lastName.trim() == null) { document.getElementById('lastName').style.borderColor = "red"; } else { document.getElementById('lastName').style.borderColor = "#e4e4e4"; }
                if (email == "" || !validateEmail(email)) { document.getElementById('email').style.borderColor = "red"; } else { document.getElementById('email').style.borderColor = "#e4e4e4"; }
                if (phone == "") { document.getElementById('phone').style.borderColor = "red"; } else { document.getElementById('phone').style.borderColor = "#e4e4e4"; }
                if (zipCode.trim() == "" || zipCode.trim() == null || zipCode.length != 5) { document.getElementById('zipCode').style.borderColor = "red"; } else { document.getElementById('zipCode').style.borderColor = "#e4e4e4"; }
                if (receiptCode.trim() == "" || receiptCode.trim() == null || receiptCode.length != 4) { document.getElementById('receiptCode').style.borderColor = "red"; } else { document.getElementById('receiptCode').style.borderColor = "#e4e4e4"; }
            }

            function sendMobile() {
                var mfirstName = document.getElementById("m-firstName").value;
                var mlastName = document.getElementById("m-lastName").value;
                var memail = document.getElementById("m-email").value;
                var mphone = document.getElementById("m-phone").value;
                var mzipCode = document.getElementById("m-zipCode").value;
                var mreceiptCode = document.getElementById("m-receiptCode").value;
                var mcheckbox1 = $("#m-check1").is(":checked");
                if (mfirstName.trim() == "" || mlastName.trim() == "" || memail == "" || mphone == "" || mzipCode == "" || mzipCode.length != 5 || mreceiptCode == "" || mreceiptCode.length != 4) {
                    document.getElementById("m-error").innerHTML = "Vyplňte polia označené červenou farbou a kliknite na 'Odoslať'.";
                    document.getElementById("m-error").style.display = "revert";
                }
                else {
                    if (!validateEmail(memail)) {
                        document.getElementById("m-error").innerHTML = "Zadajte prosím správny e-mail."
                        document.getElementById("m-error").style.display = "revert";
                    }
                    else if (mcheckbox1 == false) {
                        document.getElementById("m-error").innerHTML = "Zaškrtnite prosím: 'Súhlasím s pravidlami súťaže'.";
                        document.getElementById("m-error").style.display = "revert";
                    }
                    else {
                        document.getElementById("m-error").style.display = "none";
                        $('#modal').modal('show');
                        $.ajax({
                            type: "POST",  //type of method
                            url: "./insert.php",  //my page
                            data: { firstName: mfirstName, lastName: mlastName, email: memail, phone: mphone, zipCode: mzipCode, receiptCode: mreceiptCode },// passing the values
                            success: function (res) {
                                $.ajax({
                                    type: "POST",  //type of method
                                    url: "./PHPMailer/index.php",  //my page
                                    data: { firstName: mfirstName, email: memail },// passing the values
                                    success: function (res) {
                                        console.log("success message");
                                    }
                                });
                                console.log("success");
                                document.getElementById("m-firstName").value = null;
                                document.getElementById("m-lastName").value = null;
                                document.getElementById("m-email").value = null;
                                document.getElementById("m-phone").value = null;
                                document.getElementById("m-zipCode").value = null;
                                document.getElementById("m-receiptCode").value = null;
                                document.getElementById("m-check1").checked = false;
                            }
                        });
                    }
                }

                if (mfirstName.trim() == "" || mfirstName.trim() == null) { document.getElementById('m-firstName').style.borderColor = "red"; } else { document.getElementById('m-firstName').style.borderColor = "#e4e4e4"; }
                if (mlastName.trim() == "" || mlastName.trim() == null) { document.getElementById('m-lastName').style.borderColor = "red"; } else { document.getElementById('m-lastName').style.borderColor = "#e4e4e4"; }
                if (memail == "" || !validateEmail(memail)) { document.getElementById('m-email').style.borderColor = "red"; } else { document.getElementById('m-email').style.borderColor = "#e4e4e4"; }
                if (mphone == "") { document.getElementById('m-phone').style.borderColor = "red"; } else { document.getElementById('m-phone').style.borderColor = "#e4e4e4"; }
                if (mzipCode.trim() == "" || mzipCode.trim() == null || mzipCode.length != 5) { document.getElementById('m-zipCode').style.borderColor = "red"; } else { document.getElementById('m-zipCode').style.borderColor = "#e4e4e4"; }
                if (mreceiptCode.trim() == "" || mreceiptCode.trim() == null || mreceiptCode.length != 4) { document.getElementById('m-receiptCode').style.borderColor = "red"; } else { document.getElementById('m-receiptCode').style.borderColor = "#e4e4e4"; }
            }

        </script>
    </main>
</body>

</html>