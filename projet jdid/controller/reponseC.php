<?php
require_once '../config.php';
require_once '../models/reponse.php';
class reponseC{

	/*afficher*/
	public function afficherReponse()
	{
		$db=config::getConnexion();
		 try{
			$query=$db->prepare("SELECT * FROM reponses");
			$query->execute();
			$result=$query->fetchAll();//testaaml kn meaa select permet de recuperer les resultat  
			return $result;
	
		}catch(PDOExeption $e)
	
		{
	$e->getMessage();
		}
	
	}
/*ajouter*/


public function ajouter($rep){

    $sql="INSERT into reponses (cin,reponse,coupon) values (:cin,:reponse,:coupon)";
    $db = config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $cin=$rep->getcin();
    $reponse=$rep->getreponse();
    $coupon=$rep->getcoupon();

    $req->bindValue(':cin',$cin);
    $req->bindValue(':reponse',$reponse);
    $req->bindValue(':coupon',$coupon);


    
        $req->execute();
       
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
    
}

public function supprimerReponse($cin)
{
    $sql ="DELETE FROM reponses WHERE cin= :cin";//: indication f bd bch nqulo fama valeur
    $db =config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindvalue(':cin',$cin);
    try {
$query->execute();

    }catch(PDOException $e){
        $e->getMessage();
    }


}



public function detailReponse($cin)//k niclicki aa detail nchuf les info d'un adherent(recuperer un enrgst)
{
$sql="SELECT * FROM reponses where cin=$cin";
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

function modifierReponse($reponse,$cin)
{
        $sql="UPDATE reponses SET cin=:cin, reponse=:reponse, coupon=:coupon WHERE cin=:cin";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $cin=$reponse->getcin();
        $reponse=$reponse->getreponse();
        $coupon=$reponse->getcoupon();
        $datas = array(':cin'=>$cin, 'reponse'=>$reponse, 'coupon'=>$coupon);
        $req->bindValue(':cin',$cin);
        $req->bindValue(':reponse',$reponse);
        $req->bindValue(':coupon',$coupon);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }


public function recupererReponse($cin){
    $sql="SELECT cin,reponse,coupon from reponses where cin=$cin";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
         catch (Exception $e){
             die('Erreur: '.$e->getMessage());
         }
  }


public function rechercheReponse($key)
{
    $sql = "SELECT * FROM reponses WHERE cin LIKE '%$key%' OR reponse LIKE '%$key%' OR coupon LIKE '%$key%'";
    $db = config::getConnexion() ;
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

 	
}
?>