function setareDestinatieLinkuriMeniu()
{
    setareDestinatieListItem(0, "href", "../Acasa.php");
    setareDestinatieListItem(1, "href", "../CanapeleFotolii/CanapeleFotolii.php");
    setareDestinatieListItem(2, "href", "../CanapeleFotolii/CanapeleExtensibile.php");
    setareDestinatieListItem(3, "href", "../CanapeleFotolii/ColtareExtensibile.php");
    setareDestinatieListItem(4, "href", "../CanapeleFotolii/CanapeleFixe.php");
    setareDestinatieListItem(5, "href", "../CanapeleFotolii/ColtareFixe.php");
    setareDestinatieListItem(6, "href", "../CanapeleFotolii/Fotolii.php");
    setareDestinatieListItem(7, "href", "../Mobila/Mobila.php");
    setareDestinatieListItem(8, "href", "../Mobila/Scaune.php");
    setareDestinatieListItem(9, "href", "../Mobila/BiblioteciDulapuri.php");
    setareDestinatieListItem(10, "href", "../Mobila/PaturiNoptiere.php");
    setareDestinatieListItem(11, "href", "../Mobila/MeseMasute.php");
    setareDestinatieListItem(12, "href", "../Mobila/Lobby.php");
    setareDestinatieListItem(13, "href", "../Mobila/BancheteTaburete.php");
    setareDestinatieListItem(14, "href", "../Mobila/MobilierGradina.php");
    setareDestinatieListItem(15, "href", "../Covoare/Covoare.php");
    setareDestinatieListItem(16, "href", "../Covoare/CovoareMonocrome.php");
    setareDestinatieListItem(17, "href", "../Covoare/CovoareModerne.php");
    setareDestinatieListItem(18, "href", "../Covoare/CovoareClasice.php");
    setareDestinatieListItem(19, "href", "../Covoare/CovoareCopii.php");
    setareDestinatieListItem(20, "href", "../Iluminat/Iluminat.php");
    setareDestinatieListItem(21, "href", "../Iluminat/LustrePlafoniere.php");
    setareDestinatieListItem(22, "href", "../Iluminat/ApliceDePerete.php");
    setareDestinatieListItem(23, "href", "../Iluminat/VeiozeLampadare.php");
    setareDestinatieListItem(24, "href", "../Iluminat/LuminiGradina.php");
    setareDestinatieListItem(25, "href", "../Decor/Decor.php");
    setareDestinatieListItem(26, "href", "../Decor/Tablouri.php");
    setareDestinatieListItem(27, "href", "../Decor/Oglinzi.php");
    setareDestinatieListItem(28, "href", "../Decor/Decoratiuni.php");
    setareDestinatieListItem(29, "href", "../Decor/Tapete.php");
    setareDestinatieListItem(30, "href", "../Decor/DecoratiuniGradina.php");
    setareDestinatieListItem(31, "href", "../Contact.php");
}

function setareDestinatieLinkuriMeniuAcasaContact()
{
    setareDestinatieListItem(0, "href", "Acasa.php");
    setareDestinatieListItem(1, "href", "CanapeleFotolii/CanapeleFotolii.php");
    setareDestinatieListItem(2, "href", "CanapeleFotolii/CanapeleExtensibile.php");
    setareDestinatieListItem(3, "href", "CanapeleFotolii/ColtareExtensibile.php");
    setareDestinatieListItem(4, "href", "CanapeleFotolii/CanapeleFixe.php");
    setareDestinatieListItem(5, "href", "CanapeleFotolii/ColtareFixe.php");
    setareDestinatieListItem(6, "href", "CanapeleFotolii/Fotolii.php");
    setareDestinatieListItem(7, "href", "Mobila/Mobila.php");
    setareDestinatieListItem(8, "href", "Mobila/Scaune.php");
    setareDestinatieListItem(9, "href", "Mobila/BiblioteciDulapuri.php");
    setareDestinatieListItem(10, "href", "Mobila/PaturiNoptiere.php");
    setareDestinatieListItem(11, "href", "Mobila/MeseMasute.php");
    setareDestinatieListItem(12, "href", "Mobila/Lobby.php");
    setareDestinatieListItem(13, "href", "Mobila/BancheteTaburete.php");
    setareDestinatieListItem(14, "href", "Mobila/MobilierGradina.php");
    setareDestinatieListItem(15, "href", "Covoare/Covoare.php");
    setareDestinatieListItem(16, "href", "Covoare/CovoareMonocrome.php");
    setareDestinatieListItem(17, "href", "Covoare/CovoareModerne.php");
    setareDestinatieListItem(18, "href", "Covoare/CovoareClasice.php");
    setareDestinatieListItem(19, "href", "Covoare/CovoareCopii.php");
    setareDestinatieListItem(20, "href", "Iluminat/Iluminat.php");
    setareDestinatieListItem(21, "href", "Iluminat/LustrePlafoniere.php");
    setareDestinatieListItem(22, "href", "Iluminat/ApliceDePerete.php");
    setareDestinatieListItem(23, "href", "Iluminat/VeiozeLampadare.php");
    setareDestinatieListItem(24, "href", "Iluminat/LuminiGradina.php");
    setareDestinatieListItem(25, "href", "Decor/Decor.php");
    setareDestinatieListItem(26, "href", "Decor/Tablouri.php");
    setareDestinatieListItem(27, "href", "Decor/Oglinzi.php");
    setareDestinatieListItem(28, "href", "Decor/Decoratiuni.php");
    setareDestinatieListItem(29, "href", "Decor/Tapete.php");
    setareDestinatieListItem(30, "href", "Decor/DecoratiuniGradina.php");
    setareDestinatieListItem(31, "href", "Contact.php");
}

function setareDestinatieListItem(numarNod, atribut, valoare)
{
    document.getElementById("meniu").getElementsByTagName("li")[numarNod].firstElementChild.setAttribute(atribut, valoare);
}

function setareActiv(numarNod)
{
    setareDestinatieListItem(numarNod, "id", "paginaActiva");
    setareDestinatieListItem(numarNod, "onclick", "return false");
}

function setareIdButon(numarButon, id)
{
    document.getElementsByClassName("subcategorie")[numarButon].getElementsByTagName("div")[0].firstElementChild.setAttribute("id", id);
}

function setareDestinatieLinkuriButon(id, destinatie)
{
    document.getElementById(id).onclick=function(){location.href=destinatie};
}