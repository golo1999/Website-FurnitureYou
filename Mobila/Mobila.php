<?php
    include '../meniu.html';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_subcategorii.css">
    <link rel="stylesheet" href="../styleMeniu.css">
    <link rel="stylesheet" href="../styleScrollBar.css">
    <link rel="stylesheet" href="../inapoiSus.css">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title> Mobilă </title>
</head>
<body>
    <div class="containerContinut">
        <div class="containerSubcategorii">
            <?php
                include '../afisareSubcategorii.php';
                $eroareLaConectare=conectareLaBazaDeDate();

                if($eroareLaConectare==false)
                {
                    $server_name="localhost";
                    $server_username="root";
                    $server_password="!Alexandru99";
                    $db="temepai";
                    
                    $conn=new mysqli($server_name, $server_username, $server_password, $db);
                    afisareSubcategorii($conn, 'mobila');
                }
            ?>
        </div>
        <div class="mergiSus" id="mergiSus" onclick="scrollSus();">
            <h2> Înapoi sus <span> <i class="fas fa-chevron-up"></i> </span> </h2>
        </div>
    </div>
    
    <script src="../jsMeniu.js"></script>
    <script src="../jsfile.js"></script>
    <script src="../jsSetareLinkuri.js"></script>
    <script src="../jsScrollSus.js"></script>

    <script>
        setareDestinatieLinkuriMeniu();
        setareActiv(7);

        setareIdButon(0, "butonBancheteTaburete");
        setareIdButon(1, "butonBiblioteciDulapuri");
        setareIdButon(2, "butonMobilaGradina");
        setareIdButon(3, "butonMobilaLobby");
        setareIdButon(4, "butonMeseMasute");
        setareIdButon(5, "butonPaturiNoptiere");
        setareIdButon(6, "butonScaune");

        setareDestinatieLinkuriButon("butonBancheteTaburete", "../Mobila/BancheteTaburete.php");
        setareDestinatieLinkuriButon("butonBiblioteciDulapuri", "../Mobila/BiblioteciDulapuri.php");
        setareDestinatieLinkuriButon("butonMobilaGradina", "../Mobila/MobilierGradina.php");
        setareDestinatieLinkuriButon("butonMobilaLobby", "../Mobila/Lobby.php");
        setareDestinatieLinkuriButon("butonMeseMasute", "../Mobila/MeseMasute.php");
        setareDestinatieLinkuriButon("butonPaturiNoptiere", "../Mobila/PaturiNoptiere.php");
        setareDestinatieLinkuriButon("butonScaune", "../Mobila/Scaune.php");
    </script>
</body>
</html>