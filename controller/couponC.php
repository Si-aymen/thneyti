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


public function ajouter($couponC){
	$pdo=config::getConnexion();
	try {
		$query=$pdo->prepare(
			"INSERT INTO coupon (id,date_deb,date_experation,taux_reduction,code_coupon) VALUES (:id,:date_deb,:date_experation,:taux_reduction,:code_coupon);"
		);
		$query->execute([
                     
		'id'=>$couponC->getid(), 
		'date_deb'=>$couponC->getdate_deb(),
		'date_experation'=>$couponC->getdate_experation(),
		'taux_reduction'=>$couponC->gettaux_reduction(),
		'code_coupon'=>$couponC->getcode_coupon(),
			
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

public function modifier($couponC,$id){
    $sql="UPDATE coupon SET  id=:id,date_deb=:date_deb,date_experation=:date_experation,taux_reduction=:taux_reduction,code_coupon=:code_coupon WHERE id=:id";
    
    $db = config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
    $req=$db->prepare($sql);
  
    $id=$couponC->getid();
  
    $date_deb=$couponC->getdate_deb();
    $date_experation=$couponC->getdate_experation();
    $taux_reduction=$couponC->gettaux_reduction();
    $code_coupon=$couponC->getcode_coupon();
    
    $datas = array(':id'=> $id, ':date_deb'=> $date_deb, ':date_experation'=> $date_experation,':taux_reduction'=> $taux_reduction,':code_coupon'=> $code_coupon);
    $req->bindValue(':id', $id);
    $req->bindValue(':date_deb', $date_deb);
    $req->bindValue(':date_experation', $date_experation);
    $req->bindValue(':taux_reduction', $taux_reduction);
    $req->bindValue(':code_coupon', $code_coupon);
    

    
    
        $s=$req->execute();
        
       // header('Location: index.php');
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
echo " Les datas : " ;
print_r($datas);
    }
    
}

function recupererCommande($id){
    $sql="SELECT * from  coupon where id=$id";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
}	
?>