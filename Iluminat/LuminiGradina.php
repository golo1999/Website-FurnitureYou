<?php
    include '../meniu.html';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lumini de grădină </title>
    <link rel="stylesheet" href="../styleMeniu.css">
    <link rel="stylesheet" href="../styleScrollBar.css">
    <link rel="stylesheet" href="../inapoiSus.css">
    <link rel="stylesheet" href="../style_subcategorii.css">
    <link rel="stylesheet" href="../style_pagina_subcategorie.css">
    <link rel="stylesheet" href="style_iluminat.css">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <div class="containerContinut">
        <div class="containerGrid">
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
                    
                    include '../afisarePaginaSubcategorii.php';
                    afisarePaginaSubcategorii($conn, 'lumina_gradina');
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
        setareActiv(24);
    </script>    
</body>
</html>