<?php
require '../config.php';

class pubC{

	
    public function affichercoupon()
	{
		$db=config::getConnexion();
		 try{
			$query=$db->prepare("SELECT * FROM annonce");
			$query->execute();
			$result=$query->fetchAll();//testaaml kn meaa select permet de recuperer les resultat  
			return $result;
	
		}catch(PDOExeption $e)
	
		{
	$e->getMessage();
		}
    }

public function ajouter($pubC){
	$pdo=config::getConnexion();
	try {
		$query=$pdo->prepare(
			"INSERT INTO annonce (id_publication,photo,date_debut,date_fin) VALUES (:id_publication,:photo,:date_debut,:date_fin);"
		);
		$query->execute([
                     
		'id_publication'=>$pubC->getid_publication(), 
		'photo'=>$pubC->getphoto(),
		'date_debut'=>$pubC->getdate_debut(),
		'date_fin'=>$pubC->getdate_fin(),
		
			
		]);
	}
	catch(PODException $e) {
		$e->getMessage();
	}
}