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

public function supprimer($id_publication)
{
    $sql ="DELETE FROM annonce WHERE id_publication= :id_publication";//: indication f bd bch nqulo fama valeur
    $db =config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindvalue(':id_publication',$id_publication);
    try {
$query->execute();

    }catch(PDOException $e){
        $e->getMessage();
    }


}
public function modifierpub($pubC,$id_publication){
    $sql="UPDATE annonce SET  id_publication=:id_publication,photo=:photo,date_debut=:date_debut,date_fin=:date_fin WHERE id_publication=:id_publication";
    
    $db = config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{

    $req=$db->prepare($sql);
	
    $id_publication=$pubC->getid_publication();
    $photo=$pubC->getphoto();
    $date_debut=$pubC->getdate_debut();
    $date_fin=$pubC->getdate_fin();
   
    
    $datas = array(':id_publication'=> $id_publication, ':photo'=> $photo, ':date_debut'=> $date_debut,':date_fin'=> $date_fin);
    $req->bindValue(':id_publication', $id);
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

function recuperer($id_publication){
    $sql="SELECT * from  annonce where id_publication=$id_publication";
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