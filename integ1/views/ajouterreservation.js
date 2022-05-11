document.getElementById("ajouter_resrevation").addEventListener("submit", function(e) {
 
	var erreur;
 
	var inputs = this.getElementsByTagName("input");
 
	for (var i = 0; i < inputs.length; i++) {
		console.log(inputs[i]);
		if (!inputs[i].value) {
			erreur = "Veuillez renseigner tous les champs";
		}
	}
 
	if (erreur) {
		e.preventDefault();
		document.getElementById("erreur").innerHTML = erreur;
		return false;
	} else {
		alert('Formulaire envoyé !');
	}
 
 
	var numabon = document.getElementById("numabon");
	var nom = document.getElementById("nom");
	var prenom = document.getElementById("prenom");
	var adresse = document.getElementById("adresse");
 
	if (!adresse.value) {
		erreur = "Veuillez renseigner un mot de passe";
	}
	if (!prenom.value) {
		erreur = "Veuillez renseigner un email";
	}
	if (!nom.value) {
		erreur = "Veuillez renseigner un pseudo";
	}
    if (!numabon.value) {
		erreur = "Veuillez renseigner un pseudo";
	}
	
 
	
});