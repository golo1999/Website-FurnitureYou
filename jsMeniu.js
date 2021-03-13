const meniu=document.getElementById("meniu");
const hamburger=document.getElementById("hamburger");
let numarApasariHamburger=0;

function afisareMeniu()
{
    numarApasariHamburger++;
    if(numarApasariHamburger%2==1)
    {
        var optiuniMeniu=document.getElementsByClassName("meniuOptiune");

        hamburger.removeAttribute("class");
        hamburger.setAttribute("class", "fas fa-times");
        meniu.style.visibility="visible";
        meniu.style.display="flex";
        meniu.style.flexDirection="row";
        meniu.style.justifyContent="center";
        meniu.style.alignItems="flex-start";
        
        for(i=0; i<optiuniMeniu.length; i++)
            optiuniMeniu[i].setAttribute("class", "meniuOptiune optiuneColor");
    }
    else
    {
        hamburger.setAttribute("class", "fas fa-bars");
        meniu.style.visibility="hidden";
        meniu.style.display="none";
    }
}