<?php
require '../config.php';
class couponC{

	/*afficher*/
	public function affichercoupon()
	{
		$db=config::getConnexion();
		 try{
			$query=$db->prepare("SELECT * FROM coupon");
			$query->execute();
			$result=$query->fetchAll();//testaaml kn meaa select permet de recuperer les resultat  
			return $result;
	
		}catch(PDOExeption $e)
	
		{
	$e->getMessage();
		}
	
	}
/*ajouter*/


public function ajouter($coupon){
	$pdo=config::getConnexion();
	try {
		$query=$pdo->prepare(
			"INSERT INTO coupon (date_deb,date_experation,taux_reduction,code_coupon) VALUES (:date_deb,:date_experation,:taux_reduction,:code_coupon);"
		);
		$query->execute([
		'date_deb'=>$coupon->getdate_deb(),
		'date_experation'=>$coupon->getdate_experation(),
		'taux_reduction'=>$coupon->gettaux_reduction(),
		'code_coupon'=>$coupon->getcode_coupon(),
			
		]);
	}
	catch(PODException $e) {
		$e->getMessage();
	}
}











public function supprimer($id)
{
    $sql ="DELETE FROM coupon WHERE id= :id";//: indication f bd bch nqulo fama valeur
    $db =config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindvalue(':id',$id);
    try {
$query->execute();

    }catch(PDOException $e){
        $e->getMessage();
    }


}



public function detail($id)//k niclicki aa detail nchuf les info d'un adherent(recuperer un enrgst)
{
$sql="SELECT *FROM coupon where id=id";
$db=config::getConnexion();
try{
$query=$db->prepare($sql);
$query->execute();
$adherent=$query->fetch();//mech lezm fetchall hachty juste fetch ta3 1 seule adherent
return $adherent;
}
catch(PDOExeception $e)
{
$e->getMessage();
}

}

public function modifier($coupon, $id)
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE coupon SET 
						date_deb = :date_deb,
						date_experation = :date_experation,
						taux_reduction = :taux_reduction,
						code_coupon = :code_coupon
		
					WHERE id = :id'
			);
			$query->execute([
				        'date_deb' => $coupon->getdate_deb(),
				        'date_experation' => $coupon->getdate_experation(),
				        'taux_reduction' => $coupon->gettaux_reduction(),
				         'code_coupon' => $coupon->getcode_coupon()
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}





	function recuperercoupon($id)
	{
		$sql = "SELECT * from coupon where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function recuperercoupon1($id){
		$sql="SELECT * from coupon where id=$id";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();
			
			$user = $query->fetch(PDO::FETCH_OBJ);
			return $user;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}



}






?>
