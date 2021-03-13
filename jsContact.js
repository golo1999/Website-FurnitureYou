setareInaltimeContinut();
setareLatimeInput();

function setareInaltimeContinut()
{
    document.getElementsByClassName("containerMeniu")[0].setAttribute("id", "containerMeniu");
    document.getElementsByClassName("containerContinut")[0].setAttribute("id", "containerContinut");
    
    var inaltimeMeniu=document.getElementById("containerMeniu").offsetHeight;
    var inaltimeContinut=window.innerHeight-inaltimeMeniu;
    
    document.getElementById("containerContinut").style.height=inaltimeContinut;
}

function setareLatimeInput()
{
    var latimePagina=window.innerWidth;

    document.getElementsByTagName("textarea")[0].setAttribute("id", "mesajFormular");
    document.getElementsByTagName("input")[0].setAttribute("id", "numeFormular");
    document.getElementsByTagName("input")[1].setAttribute("id", "emailFormular");
    document.getElementsByTagName("input")[2].setAttribute("id", "butonFormular");
    
    document.getElementById("numeFormular").style.width=0.4*latimePagina;
    document.getElementById("emailFormular").style.width=0.4*latimePagina
    document.getElementById("butonFormular").style.width=0.4*latimePagina;
    document.getElementById("mesajFormular").style.width=0.4*latimePagina;
    document.getElementById("mesajFormular").style.resize="none";

    document.getElementById("numeFormular").setAttribute("placeholder", "Nume");
    document.getElementById("emailFormular").setAttribute("placeholder", "Email");
    document.getElementById("mesajFormular").setAttribute("placeholder", "Mesaj");
}