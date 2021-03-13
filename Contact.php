<?php
    include 'meniu.html';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact </title>
    <link rel="stylesheet" href="styleMeniu.css">
    <link rel="stylesheet" href="style_contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body onresize="setareInaltimeContinut(); setareLatimeInput();">
    <div class="containerContinut">
        <div class="containerFormular">
            <div class="formular">
                <form action="mailto:aggologan1999@gmail.com" method="GET">
                    <input type="text" name="nume" id="nume">
                    <input type="email" name="email" id="email">
                    <textarea name="text" id="text" rows="10"></textarea>
                    <input type="submit" value="Trimite">
                </form>
            </div>
        </div>
        <div class="containerInformatiiContact">
            <img src="Poze/iphone_noback.png">
            <div class="informatiiContact">
                <div class="informatiiAdresa">
                    <span> <i class="fas fa-map-marker-alt"></i> <h3> Adresă </h3> </span>
                    <p> Strada Libertății, B5, Apartament 9, Reșița </p>
                </div>
                <div class="informatiiPersoanaContact">
                    <span> <i class="fas fa-user-tie"></i> <h3> Persoană de contact </h3> </span>
                    <p> George-Alexandru Gologan </p>
                </div>
                <div class="informatiiEmail">
                    <span> <i class="fas fa-envelope"></i> <h3> Email </h3> </span>
                    <p> aggologan1999@gmail.com </p>
                </div>
                <div class="informatiiTelefon">
                    <span> <i class="fas fa-phone-alt"></i> <h3> Telefon </h3> </span>
                    <p> +40742035722 </p>
                </div>
            </div>
        </div>
    </div>

    <script src="jsMeniu.js"></script>
    <script src="jsfile.js"></script>
    <script src="jsSetareLinkuri.js"></script>
    <script src="jsContact.js"></script>

    <script>
        setareDestinatieLinkuriMeniuAcasaContact();
        setareActiv(31);
    </script>
</body>
</html>