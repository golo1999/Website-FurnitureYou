<?php

function afisarePaginaSubcategorii($conn, $subcategorie)
{
    $sqlPaginaSubcategorii="select * from mobila where subcategorie='$subcategorie'";
    $result=$conn->query($sqlPaginaSubcategorii);
    $numarCard=0;

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc()) // crearea cate unui grid item
        {
            $numarCard++;
            echo "<div class='card ";
            if($numarCard%2==1)
                echo "stanga";
            else echo "dreapta";
            echo "'>";
            echo "<img src='".$row["poza"]."'>";
            echo "<div class='detaliiCard'>";
            echo "<h3> ".$row["denumire"]." </h3>";
            echo "<p";
            if($row["pret_nou"]!==null)
                echo " class='reducere'> <span> ".editarePret($row["pret_nou"])." RON"." </span>";
            else echo ">";
            echo "<span> ".editarePret($row["pret_vechi"])." RON"." </span>";
            if(afisareReducere($row["pret_vechi"], $row["pret_nou"])<0)
                echo "<span> "."(".intval(editarePret(afisareReducere($row["pret_vechi"], $row["pret_nou"])))."%)"." </span>";
            echo " </p>";
            echo "</div>";
            echo "</div>";
        }
    }
}

function editarePret($pret)
{
    $pret=strval($pret);
    if(strpos($pret, ".")!==false) // daca pretul continte '.'
        if(strpos($pret, ".")==strlen($pret)-2) // daca pretul are o singura zecimala la final (ex: 50.3), ii mai adaugam un 0
            $pret.="0";

    return $pret;
}

function afisareReducere($pretInitial, $pretNou)
{
    $reducere=0;

    if($pretNou!==null)
        $reducere=$pretNou/$pretInitial*100-100;

    return $reducere;
}