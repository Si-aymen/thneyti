<?php
require_once '../config.php';

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
			"INSERT INTO annonce (idd,photo,date_debut,date_fin) VALUES (:idd,:photo,:date_debut,:date_fin);"
		);
		$query->execute([
                     
		'idd'=>$pubC->getidd(), 
		'photo'=>$pubC->getphoto(),
		'date_debut'=>$pubC->getdate_debut(),
		'date_fin'=>$pubC->getdate_fin(),
		
			
		]);
	}
	catch(PODException $e) {
		$e->getMessage();
	}
}

public function supprimer($idd)
{
    $sql ="DELETE FROM annonce WHERE idd= :idd";//: indication f bd bch nqulo fama valeur
    $db =config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindvalue(':idd',$idd);
    try {
$query->execute();

    }catch(PDOException $e){
        $e->getMessage();
    }


}
 function modifier($pubC,$idd){
    $sql="UPDATE annonce SET  idd=:idd,photo=:photo,date_debut=:date_debut,date_fin=:date_fin WHERE idd=:idd";
    
    $db = config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
    $req=$db->prepare($sql);
  
    $idd=$pubC->getidd();
    $photo=$pubC->getphoto();
    $date_debut=$pubC->getdate_debut();
    $date_fin=$pubC->getdate_fin();
   
    
    $datas = array(':idd'=> $idd, ':photo'=> $photo, ':date_debut'=> $date_debut,':date_fin'=> $date_fin);
    $req->bindValue(':idd', $idd);
    $req->bindValue(':photo', $photo);
    $req->bindValue(':date_debut', $date_debut);
    $req->bindValue(':date_fin', $date_fin);
  
    

    
    
        $s=$req->execute();
        
       // header('Location: index.php');
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
echo " Les datas : " ;
print_r($datas);
    }
    
}
function recuperer($idd){
    $sql="SELECT * from  annonce where idd=$idd";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
public function getRowspub() {
    $sql = "SELECT COUNT(*) FROM annonce";
    $db = config::getConnexion();
    $stmt = $db->query($sql);
    $count = $stmt->fetchColumn();
    //return $count;
    print $count;
}
public function recherchepub($key)
{
    $sql = "SELECT * FROM annonce WHERE idd LIKE '%$key%' ";
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