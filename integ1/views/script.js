function validateForm() {
    var letters = /^[A-Za-z]+$/;
    var dateNow = new Date();
    var n = document.getElementById("depart").value;
    var p = document.getElementById("destination").value;
    var dp = document.getElementById("date_permis").value;
    var db = document.getElementById("date_debut").value;
    var dr = document.getElementById("date_retour").value;

    if (n == "") {
        alert("le depart est vide !!");
        return false;
    }
    else if (!(n.match(letters) )) {
alert("Veuillez entrer un depart valid!");
return false ;
}
else if (p == "") {
        alert("le destination est vide !!");
        return false;
    }
    else if (!(p.match(letters) )) {
alert("le destination est invalide !");
return false ;
} else if (new Date(dp).toLocaleString() > dateNow.toLocaleString()) {
alert( "la date permis supeireur a date systeme  !");
return false ;
}
/* else if(new Date(dp).toLocaleString() < dateNow.toLocaleString()) {
alert( "la date debut est inferieur  a date systeme  !");
return false ;
} */
/*  else if(new Date(dr).toLocaleString() < dateNow.toLocaleString()) {
alert( " date retour est inferieur  a date systeme  !");
return false ;
}*/
else if ((new Date(dp).toLocaleString())<(new Date(dr).toLocaleString()))
{
    alert ("la date retour est inferieur a date debut  ") ; 
    return false ;
}

}
   