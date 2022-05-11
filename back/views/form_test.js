function validateForm() {
    var mat = document.getElementById("matricule").value;
    var mar = document.getElementById("marque").value;
    var pi = document.getElementById("prix").value;
    var im = document.getElementById("image").value;
    var errormat = document.getElementById('errorMat');
    var errormar = document.getElementById('errorMar');
    var errorpr = document.getElementById('errorPr');
    var errorim = document.getElementById('errorIm');

    if ((mat == "") || (mat.indexOf("TU") == -1)) {
        errormat.innerHTML = "Veuillez entrer une matricule !";
        return false;
    } else if (mar == "") {
        errormar.innerHTML = "Veuillez entrer une marque !";
        return false;
    } else if ((et == "") || (et.indexOf("%") == -1)) {
        erroret.innerHTML = "Veuillez l etat du voiture !";
        return false;
    } else if ((pi == "") || (isNaN(pi) == true)) {
        errorpr.innerHTML = "Veuillez entrer le prix !";
        return false;
    }

}
function validateForm2() {
    var letters = /^[A-Za-z]+$/;
    var dateNow = new Date();
    var dp = document.getElementById("date_permis").value;
    var db = document.getElementById("date_debut").value;
    var dr = document.getElementById("date_retour").value;
   // var errordp = document.getElementById('errorDp'); 
    //var errordb = document.getElementById('errorDd'); 
    //var errordr = document.getElementById('errorDr'); 
/* else if (new Date(dp).toLocaleString() > dateNow.toLocaleString()) {
alert( "la date permis supeireur a date systeme  !");
return false ;
}
else if(new Date(dp).toLocaleString() < dateNow.toLocaleString()) {
alert( "la date debut est inferieur  a date systeme  !");
return false ;
}
else if(new Date(dr).toLocaleString() < dateNow.toLocaleString()) {
alert( " date retour est inferieur  a date systeme  !");
return false ;
}
else if ((new Date(dr).toLocaleString())<(new Date(dr).toLocaleString()))
{
    alert ("la date retour est inferieur a date debut  ") ; 
    return false ;
}*/

}