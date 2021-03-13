function verificare(idDiv, sursaNouaImagine)
{
    var div=document.getElementById(idDiv);

    if(!div.classList.contains("activ")) // verificam daca cerculetul pe care dam click este deja activ si in caz afirmativ nu mai schimbam imaginea si cerculetul activ 
    {
        eliminareDivActivSlideShow(); // stergem clasa 'activ' de la toate elementele ce o au (adica 1 singur)
        setareDivActivSlideShow(idDiv); // adaugam clasa 'activ' elementului ce va deveni acum activ (cerculetul)
        setareSursaImagine(sursaNouaImagine); // schimbare imagine in functie de elementul apasat
        setareClasaFade();
    }
}

function eliminareDivActivSlideShow()
{
    var activ=document.getElementsByClassName("sliderDiv activ");
    for(i=0; i<activ.length; i++)
        activ[i].classList.remove("activ");
}

function setareDivActivSlideShow(idDiv)
{
    document.getElementById(idDiv).setAttribute("class", "sliderDiv activ");
}

function setareSursaImagine(sursaNoua)
{
    document.getElementById("imagineSlide").src=sursaNoua;
}

function setareClasaFade() // dupa 1s executam metoda 'setareFade' => ii adaugam imaginii curente clasa 'fadeImg', ce are o animatie inclusa
{
    document.getElementById("imagineSlide").setAttribute("class", "fadeImg");
    setTimeout(stergereClasaFade, 1000);
}

function stergereClasaFade() // stergem toate clasele (adica 1 in cazul nostru) imaginii, pentru a putea executa din nou animatia atunci cand dam click pe alt cerculet
{
    document.getElementById("imagineSlide").removeAttribute("class");
}

document.getElementById("numePagina").innerHTML=document.title;