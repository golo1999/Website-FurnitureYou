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
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title> Canapele și fotolii </title>
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
                        afisareSubcategorii($conn, 'canapea_fotoliu');
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
        setareActiv(1);

        setareIdButon(0, "butonCanapeleExtensibile");
        setareIdButon(1, "butonCanapeleFixe");
        setareIdButon(2, "butonColtareExtensibile");
        setareIdButon(3, "butonColtareFixe");
        setareIdButon(4, "butonFotolii");

        setareDestinatieLinkuriButon("butonCanapeleExtensibile", "../CanapeleFotolii/CanapeleExtensibile.php");
        setareDestinatieLinkuriButon("butonCanapeleFixe", "../CanapeleFotolii/CanapeleFixe.php");
        setareDestinatieLinkuriButon("butonColtareExtensibile", "../CanapeleFotolii/ColtareExtensibile.php");
        setareDestinatieLinkuriButon("butonColtareFixe", "../CanapeleFotolii/ColtareFixe.php");
        setareDestinatieLinkuriButon("butonFotolii", "../CanapeleFotolii/Fotolii.php");
    </script>
</body>
</html>