<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Umzug'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>


    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <h1 class="header__title"><?= $title ?></h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <section class="video">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container2">
                        <div class="video__box">
                            <div class="video__inner">
                                <video autoplay="autoplay" muted preload="metadata" controls="controls">
                                    <source src="assets/img/video.mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='bestDeal'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='bestDeal__box'>
                            <h2 class="bestDeal__title">Top Angebot: LKW + 2 Mann  <span class="bestDeal__amin"><span> ab</span>15 € </span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='commet'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='commet__box'>
                            <div class="commet__left">
                                <ul class="commet__ul">
                                    <li>Kostenlose Besichtigung</li>
                                    <li>Kurzfristige Termine möglich</li>
                                    <li>Übersiedlung ohne Wartezeiten</li>
                                </ul>
                                <div class="commet__messageWrap">
                                    <a href="#anchor" class="commet__message">Jetzt anfrage senden</a>
                                </div>
                            </div>
                            <div class="commet__right">
                                <div class="commet__imgWrap">
                                    <img class="commet__img" src="assets/img/woman.jpg" alt="" >
                                    <div class="commet__star">★★★★★</div>
                                </div>
                                <p class="commet__txt">Top Umzugsfirma! Alles perfekt gelaufen, freundliches und effizientes Team. Sehr zu empfehlen!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='service'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='service__box'>
                            <div class="service__wrapper">
                                <div class="service__imgW">
                                    <img class="service__img" src="assets/img/1.svg" alt="" >
                                </div>
                                <p class="service__name">Günstige Preise</p>
                                <p class="service__txt">Dank AnyVan vermeiden unsere Spediteure leere Hin- oder Rückfahrten</p>
                            </div>
                            <div class="service__wrapper">
                                <div class="service__imgW">
                                    <img class="service__img" src="assets/img/2.svg" alt="" >
                                </div>
                                <p class="service__name">Umfassender Service</p>
                                <p class="service__txt">Auf Anfrage z.B. inkl. Packservice, Ab- und Aufbauen von Möbeln sowie Küchen</p>
                            </div>
                            <div class="service__wrapper">
                                <div class="service__imgW">
                                    <img class="service__img" src="assets/img/3.svg" alt="" >
                                </div>
                                <p class="service__name">Festpreise</p>
                                <p class="service__txt">Komplettpreise inkl. aller Kosten, Versicherung und Mehrwertsteuer. Einfach sorgenfrei buchen.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='furnitureAssembly'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <h2 class="furnitureAssembly__title">Möbelmontage- und Demontage</h2>
                        <div class='furnitureAssembly__box'>
                            <div class="furnitureAssembly__left">
                                <img class="furnitureAssembly__img" src="assets/img/mebel.jpg" alt="" >
                            </div>
                            <div class="furnitureAssembly__right">
                                <ul class="furnitureAssembly__ul">
                                    <li>Zeitersparnis und Stressreduktion</li>
                                    <li>Sicherheit für Ihre Möbel</li>
                                    <li>Maßgeschneiderte Lösungen</li>
                                    <li>Erfahrung und Know-how</li>
                                </ul>
                                <div class="commet__messageWrap">
                                    <a href="#anchor" class="commet__message">Jetzt Termin vereinbaren</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='professional'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <h2 class="professional__title">Professionelle Hilfe für Ihren Umzug</h2>
                        <div class='professional__box'>
                            <div class="professional__left">
                                <img class="professional__img" src="assets/img/stoimost.svg" alt="" >
                            </div>
                            <div class="professional__right">
                                <p class="professional__txt">Unser Experten-Team hilft Ihnen bei jedem Schritt Ihres Umzugs - von Planung bis Transport. Kontaktieren Sie uns für ein maßgeschneidertes Angebot.</p>
                                <div class="professional__inner">
                                    <a class="professional__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='forms'>
              <div class='container-fluid'>
                 <div class='row'>
                    <div class='col-12 container'>
                       <div class='forms__box'>
                        <div class="forms__w">
                            <h2 class="forms__wTitle">Kostenberechnung per WhatsApp - Schnell und bequem</h2>
                            <div class="forms__imgWrap">
                             <a class="professional__wLink" title="Hier klicken" href="whatsapp://send?phone=79270000000"> <img class="forms__img" src="assets/img/WhatsApp.gif" alt="Hier klicken" ></a>
                            </div>
                        </div>
                        <div class='forms__wrapper' id="anchor">
                          <h2 class='forms__title'>Kontaktieren Sie uns:</h2>
                          <form id='jq_form' class='mb-0 mt-3'>
                             <div class='my-0'>
                                <input class='form-control' placeholder='Name' name='jq_name' type='text'>
                                <div id='jq_name' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Telefonnummer' name='jq_phone' type='text'>
                                <div id='jq_phone' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Straße' name='jq_street' type='text'>
                                <div id='jq_street' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Postleitzahl/Stadt' name='jq_city' type='text'>
                                <div id='jq_city' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='E-mail' name='jq_email' type='text'>
                                <div id='jq_email' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <textarea rows='3' class='form-control' name='jq_text' placeholder='Beschreibung'></textarea>
                                <div id='jq_text' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div>
                                <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Senden'>
                             </div>
                             <div id='jq_success' style='display:none'>Vielen Dank für Ihre Anfrage. Unsere Mitarbeiter werden sich in Kürze bei Ihnen melden.</div>
                          </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <section class='messageFixed'>
            <div class='messageFixed__box'>
                <div class="freeOffer__message">
                    <a title="Whatsapp" href="whatsapp://send?phone=+43 660 4275976"><img src="assets/icons/WhatsApp.svg" /></a>
                    <div class="professional__wrapper2">
                        <a href="<?= $phone_href ?>" class="professional__btn2"><img class="professional__img2" src="assets/icons/telephone-fill2.svg" alt="" ></a>
                        <img class="professional__imgCir2" src="assets/img/cir.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">© 2023</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>