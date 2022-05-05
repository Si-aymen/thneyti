<?php
require '../config.php';
require_once '../model/user.php';


class userC{

public function ajouter($user){
	$pdo=config::getConnexion();
	try {
		$query=$pdo->prepare(
			"INSERT INTO user (nom,prenom,date_de_naissance,email,mot_de_passe,adresse,sexe,permis,tel)
			VALUES ( :nom, :prenom, :date_de_naissance, :email, :mot_de_passe, :adresse, :sexe, :permis, :tel);"
		);
		$query->execute([
			'nom'=>$user->getNom(),
			'prenom'=>$user->getPrenom(),
			'date_de_naissance'=>$user->getDateDeNaissance(),
			'email'=>$user->getEmail(),
			'mot_de_passe'=>$user->getMotDePasse(),
			'adresse'=>$user->getAdresse(),
			'sexe'=>$user->getSexe(),
			'permis'=>$user->getPermis(),
			'tel'=>$user->getBankID(),	
		]);
	}
	catch(PODException $e) {
		$e->getMessage();
	}
}
function connexionUser($email,$mot_de_passe){
	$sql="SELECT * FROM user WHERE email='" . $email . "' and mot_de_passe = '". $mot_de_passe."'";
	$db = config::getConnexion();
	try{
		$query=$db->prepare($sql);
		$query->execute();
		$count=$query->rowCount();
		if($count==0) {
			$message = "pseudo ou le mot de passe est incorrect";
		} else {
			$x=$query->fetch();
			$message = $x['role'];
		}
	}
	catch (Exception $e){
			$message= " ".$e->getMessage();
	}
  return $message;
}

}

?>