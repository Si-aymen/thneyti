function verif() {
    var nom = document.forms["RegForm"]["Nom"];
    var prenom = document.forms["RegForm"]["Prénom"];
    var email = document.forms["RegForm"]["Email"];
    var tel = document.forms["RegForm"]["Téléphone"];
    var mot_de_passe = document.forms["RegForm"]["Mot de passe"];
    var adresse = document.forms["RegForm"]["Adresse"];

    if (nom.value == "") {
      alert("Mettez votre nom.");
      name.focus();
      return false;
    }
    if (prenom.value == "") {
      alert("Mettez votre prenom.");
      prenom.focus();
      return false;
    }
    if (adresse.value == "") {
      alert("Mettez votre adresse.");
      adresse.focus();
      return false;
    }
    if (email.value == "") {
      alert("Mettez une adresse email valide.");
      email.focus();
      return false;
    }
    if (email.value.indexOf("@", 0) < 0) {
      alert("Mettez une adresse email valide.");
      email.focus();
      return false;
    }
    if (email.value.indexOf(".", 0) < 0) {
      alert("Mettez une adresse email valide.");
      email.focus();
      return false;
    }
    if (tel.value == "") {
      alert("Mettez votre numéro de téléphone.");
      tel.focus();
      return false;
    }
    if (mot_de_passe.value == "") {
      alert("Saisissez votre mot de passe");
      mot_de_passe.focus();
      return false;
    }
    return true;
  }