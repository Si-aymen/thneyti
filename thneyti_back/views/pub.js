function verifier() {
	var id_publication=f1.id_publication.value;
	
	
	var photo=f1.photo.value;
	if (id_publication.length) {}
if (id_publication.length==0)
	{
		var x=document.getElementById('aa').style.color="red";
		alert("remplir l'identifiant ");
	}
	
		if (photo.length==0) 
		{
			alert("il faut mettre l'image de produit ");
		}


}