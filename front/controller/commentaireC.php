<?php
require '../config.php';
class commentaireC{

	/*afficher*/
	public function affichercommentaire()
	{
		$db=config::getConnexion();
		 try{
			$query=$db->prepare("SELECT * FROM commentaire");
			$query->execute();
			$result=$query->fetchAll();//testaaml kn meaa select permet de recuperer les resultat  
			return $result;
	
		}catch(PDOExeption $e)
	
		{
	$e->getMessage();
		}
	
	}
/*ajouter*/


public function ajoutercommentaire($commentaire){
	$pdo=config::getConnexion();
	try {
		$query=$pdo->prepare(
			"INSERT INTO commentaire (contenu,date_com) VALUES (:contenu,:date_com);"
		);
		$query->execute([
		
		'contenu'=>$commentaire->getcontenu(),
	
		'date_com'=>$commentaire->getdate_com()
			
		]);
	}
	catch(PODException $e) {
		$e->getMessage();
	}
}
public function supprimer($id_com)
{
    $sql ="DELETE FROM commentaire WHERE id_com= :id_com";//: indication f bd bch nqulo fama valeur
    $db =config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindvalue(':id_com',$id_com);
    try {
$query->execute();

    }catch(PDOException $e){
        $e->getMessage();
    }


}



public function com($id_com)//k niclicki aa detail nchuf les info d'un adherent(recuperer un enrgst)
{
$sql="SELECT *FROM commentaire where id_com=id_com";
$db=config::getConnexion();
try{
$query=$db->prepare($sql);
$query->execute();
$adherent=$query->fetch();//mech lezm fetchall hachty juste fetch ta3 1 seule adherent
return $poste;
}
catch(PDOExeception $e)
{
$e->getMessage();
}

}


 function modifier($poste, $id)
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE coupon SET 
				id= :id,
						titre= :titre,
						contenu= :contenu,
						image= :image,
						date_de_pub= :date_de_pub
		
					WHERE id= :id'
			);
			$query->execute([
				
				        'date_deb' => $coupon->getdate_deb(),
				        'date_experation' => $coupon->getdate_experation(),
				        'taux_reduction' => $coupon->gettaux_reduction(),
				         'code_coupon' => $coupon->getcode_coupon(),
						 'id' =>  $id 
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

}
?>