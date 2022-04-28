<?php
require_once '../config.php';

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
			"INSERT INTO coupon (idd,date_deb,date_experation,taux_reduction,code_coupon) VALUES (:idd,:date_deb,:date_experation,:taux_reduction,:code_coupon);"
		);
		$query->execute([
                     
		'idd'=>$couponC->getidd(), 
		'date_deb'=>$couponC->getdate_deb(),
		'date_experation'=>$couponC->getdate_experation(),
		'taux_reduction'=>$couponC->gettaux_reduction(),
		'code_coupon'=>$couponC->getcode_coupon()
			
		]);
	}
	catch(PODException $e) {
		$e->getMessage();
	}
}
public function supprimer($idd)
{
    $sql ="DELETE FROM coupon WHERE idd= :idd";//: indication f bd bch nqulo fama valeur
    $db =config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindvalue(':idd',$idd);
    try {
$query->execute();

    }catch(PDOException $e){
        $e->getMessage();
    }


}



public function detail($idd)//k niclicki aa detail nchuf les info d'un adherent(recuperer un enrgst)
{
$sql="SELECT *FROM coupon where idd=idd";
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

public function modifier($couponC,$idd){
    $sql="UPDATE coupon SET  idd=:idd,date_deb=:date_deb,date_experation=:date_experation,taux_reduction=:taux_reduction,code_coupon=:code_coupon WHERE idd=:idd";
    
    $db = config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
    $req=$db->prepare($sql);
  
    $idd=$couponC->getidd();
  
    $date_deb=$couponC->getdate_deb();
    $date_experation=$couponC->getdate_experation();
    $taux_reduction=$couponC->gettaux_reduction();
    $code_coupon=$couponC->getcode_coupon();
    
    $datas = array(':idd'=> $idd, ':date_deb'=> $date_deb, ':date_experation'=> $date_experation,':taux_reduction'=> $taux_reduction,':code_coupon'=> $code_coupon);
    $req->bindValue(':idd', $idd);
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

function recupererCommande($idd){
    $sql="SELECT * from  coupon where idd=$idd";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function tri_date(){
    $sql="SELECT * FROM coupon ORDER BY date_deb ASC ";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }

}
public function rechercheCoupon($key)
{
    $sql = "SELECT * FROM coupon WHERE idd LIKE '%$key%' OR taux_reduction LIKE '%$key%' OR code_coupon LIKE '%$key%'";
    $db = config::getConnexion() ;
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}
public function getRowsNumber() {
    $sql = "SELECT COUNT(*) FROM coupon";
    $db = config::getConnexion();
    $stmt = $db->query($sql);
    $count = $stmt->fetchColumn();
    //return $count;
    print $count;
}



}	
?>