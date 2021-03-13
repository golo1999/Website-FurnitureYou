<?php

function conectareLaBazaDeDate()
{
    $eroareLaConectare=false;

    $server_name="localhost";
    $server_username="root";
    $server_password="!Alexandru99";
    $db="temepai";
    
    $conn=new mysqli($server_name, $server_username, $server_password, $db);

    if($conn->connect_error)
    {
        $eroareLaConectare=true;
        die("Connection failed: ".$conn->connect_error);
    }

    return $eroareLaConectare;
}

function afisareSubcategorii($conn, $categoriePrincipala)
{
    $sqlSubcategorii="select * from mobila group by subcategorie having categorie='$categoriePrincipala' order by subcategorie";
    $result=$conn->query($sqlSubcategorii);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            echo "<div class='subcategorie'>";
            echo "<img src='../Poze/Subcategorii/".afisareImagineSubcategorie($row["subcategorie"])."'>";
            echo "<div class='detaliiSubcategorie'>";
            echo "<button type='submit'> "."Mergi la ".strtolower(substr(editareNumeSubcategorie($row["subcategorie"]), 0, 1)).substr(editareNumeSubcategorie($row["subcategorie"]), 1)."<span> <i class='fas fa-chevron-circle-up'></i> </span>"." </button>";
            echo "</div>";
            echo "</div>";
        }
    }
}

function editareNumeSubcategorie($subcategorie)
{
    switch($subcategorie)
    {
        case "aplica_perete":
            return "Aplice de perete";
        case "bancheta_taburet":
            return "Banchete și taburete";
        case "biblioteca_dulap":
            return "Biblioteci și dulapuri";
        case "canapea_extensibila":
            return "Canapele extensibile";
        case "canapea_fixa":
            return "Canapele fixe";
        case "coltar_extensibil":
            return "Colțare extensibile";
        case "coltar_fix":
            return "Colțare fixe";
        case "covor_clasic":
            return "Covoare clasice";
        case "covor_copil":
            return "Covoare pentru copii";
        case "covor_modern":
            return "Covoare moderne";
        case "covor_monocrom":
            return "Covoare monocrome";
        case "decoratiune_gradina":
            return "Decorațiuni de grădină";
        case "decoratiune_interior":
            return "Decorațiuni interioare";
        case "fotoliu":
            return "Fotolii";
        case "gradina":
            return "Mobilier pentru grădină";
        case "lobby":
            return "Mobilier pentru lobby";
        case "lumina_gradina":
            return "Lumini de grădină";
        case "lustra_plafoniera":
            return "Lustre și plafoniere";
        case "masa_masuta":
            return "Mese și măsuțe";
        case "oglinda":
            return "Oglinzi";
        case "pat_noptiera":
            return "Paturi și noptiere";
        case "scaun":
            return "Scaune";
        case "tablou":
            return "Tablouri";
        case "tapet":
            return "Tapete";
        case "veioza_lampadar":
            return "Veioze și lampadare";
    }
}

function afisareImagineSubcategorie($subcategorie)
{
    switch($subcategorie)
    {
        case "aplica_perete":
            return "aplica.jpg";
        case "bancheta_taburet":
            return "taburet.jpg";
        case "biblioteca_dulap":
            return "dulap.jpg";
        case "canapea_extensibila":
            return "canapea_extensibila.jpg";
        case "canapea_fixa":
            return "canapea_fixa.jpg";
        case "coltar_extensibil":
            return "coltar_extensibil.jpg";
        case "coltar_fix":
            return "coltar_fix.jpg";
        case "covor_clasic":
            return "covor_clasic.jpg";
        case "covor_copil":
            return "covor_copii.jpg";
        case "covor_modern":
            return "covor_modern.jpg";
        case "covor_monocrom":
            return "covor_monocrom.jpg";
        case "decoratiune_gradina":
            return "decoratiune_gradina.jpg";
        case "decoratiune_interior":
            return "decoratiune_interior.jpg";
        case "fotoliu":
            return "fotoliu.jpg";
        case "gradina":
            return "mobila_gradina.jpg";
        case "lobby":
            return "lobby.jpg";
        case "lumina_gradina":
            return "iluminat_gradina.jpg";
        case "lustra_plafoniera":
            return "lustra.jpg";
        case "masa_masuta":
            return "masa.jpg";
        case "oglinda":
            return "oglinda.jpg";
        case "pat_noptiera":
            return "pat.jpg";
        case "scaun":
            return "scaun.jpg";
        case "tablou":
            return "tablou.jpg";
        case "tapet":
            return "tapet.jpg";
        case "veioza_lampadar":
            return "veioza.jpg";
    }
}