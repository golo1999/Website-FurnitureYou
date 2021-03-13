<?php
    $catevaCuvinteDespreNoi="Obiectul de activitate al firmei îl reprezintă producerea și comercializarea mobilierului pentru casă si birou. Gama de produse de mobilier oferită clienților cuprinde: sufragerii, dormitoare, biblioteci, camere pentru copii și tineret, bucătării, mic mobilier (comode, mese, măsuțe, noptiere, taburete, garderobe, cuiere), mobilier tapițat: canapele și fotolii, mobilier de birou, mobilier pentru hotel. La solicitarea clienților se poate executa și mobilier personalizat la comandă.";
    $servicii="Misiunea Furniture You reflectă dorința și eforturile întregii echipe de cca 1000 oameni de a satisface toate cerințele clienților, oferind produse de mobilier modern și/ sau clasic, din lemn masiv, mdf sau pal, la un raport calitate - preț continuu îmbunătățit. Fiecare fabrică este specializată în producția unui anumit tip de mobilier. Produsele de mobilier sunt realizate din lemn masiv, PAL melaminat (18 mm), PAL furniruit și MDF (32 mm).";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Furniture You </title>
    <link rel="stylesheet" href="style_acasa.css">
    <link rel="stylesheet" href="styleMeniu.css">
    <link rel="stylesheet" href="styleScrollBar.css">
    <link rel="stylesheet" href="inapoiSus.css">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <?php
        include 'meniu.html';
    ?>
    <div class="containerContinut">
        <div class="containerImagine" id="containerImagine">
            <img id="imagineSlide" src="Poze/7.jpg">
            <ol>
                <li> <div class="sliderDiv activ" id="slider1" onclick="verificare('slider1', 'Poze/7.jpg');"></div> </li>
                <li> <div class="sliderDiv" id="slider2" onclick="verificare('slider2', 'Poze/5.jpg');"></div> </li>
                <li> <div class="sliderDiv" id="slider3" onclick="verificare('slider3', 'Poze/12.jpg');"></div> </li>
                <li> <div class="sliderDiv" id="slider4" onclick="verificare('slider4', 'Poze/11.jpg');"></div> </li>
            </ol>
        </div>
        <div class="containerDescriere">
            <h2> Câteva cuvinte despre noi </h2>
            <p> <?php echo $catevaCuvinteDespreNoi; ?> </p>
        </div>
        <div class="containerCarduri">
            <div class="card">
                <i class="fa fa-thumbs-up"></i>
                <p>12</p>
                <p>Ani de experiență</p>
            </div>
            <div class="card">
                <i class="fa fa-user"></i>
                <p>23</p>
                <p>Angajați calificați</p>
            </div>
            <div class="card">
                <i class="fa fa-presentation"></i>
                <p>189</p>
                <p>Proiecte de succes</p>
            </div>
            <div class="card">
                <i class="fa fa-grin-hearts"></i>
                <p>98</p>
                <p>Clienți satisfăcuți</p>
            </div>
        </div>
        <div class="containerGalerie">
            <div id="imagineGarsoniera"></div>
            <div id="imagineRestaurant"></div>
            <div id="imagineStudio"></div>
            <div id="imagineLocuinta"></div>
            <div id="imagineConferinte"></div>
            <div id="imagineGradina"></div>
            <div id="imagineBirou"></div>
        </div>
        <div class="containerServicii">
            <h2> Servicii </h2>
            <p> <?php echo $servicii; ?> </p>
        </div>
        <div class="containerCarduriServicii">
            <div class="card">
                <i class="fas fa-cube"></i>
                <p> Design interior </p>
            </div>
            <div class="card">
                <i class="fas fa-landmark"></i>
                <p> Arhitectura interioara </p>
            </div>
            <div class="card">
                <i class="fas fa-lightbulb"></i>
                <p> Iluminare </p>
            </div>
            <div class="card">
                <i class="fas fa-couch"></i>
                <p> Mobilier </p>
            </div>
        </div>
        <div class="containerCopyright">
            <h4> Copyright &#169;2020 <span> <a href="https://www.facebook.com/georgealexandru.gologan.10/" target="_blank"> George-Alexandru Gologan </a> </span> </h4>
        </div>
        <div class="mergiSus" id="mergiSus" onclick="scrollSus();">
            <h2> Înapoi sus <span> <i class="fas fa-chevron-up"></i> </span> </h2>
        </div>
    </div>

    <script src="jsMeniu.js"></script>
    <script src="jsfile.js"></script>
    <script src="jsSetareLinkuri.js"></script>
    <script src="jsScrollSus.js"></script>

    <script>
        setareDestinatieLinkuriMeniuAcasaContact();
        setareActiv(0);
    </script>
</body>
</html>