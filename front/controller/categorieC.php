<?php
require_once '../config.php';
require_once '../model/categorie.php';
class categorieC{

	/*afficher*/
	public function afficherCategorie()
	{
		$db=config::getConnexion();
		 try{
			$query=$db->prepare("SELECT * FROM categorie");
			$query->execute();
			$result=$query->fetchAll();//testaaml kn meaa select permet de recuperer les resultat  
			return $result;
	
		}catch(PDOExeption $e)
	
		{
	$e->getMessage();
		}
	
	}
/*ajouter*/


public function ajouter($categorie){

    $sql="INSERT into categorie (nomcateg,description,fcin) values (:nomcateg,:description,:fcin)";
    $db = config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $nomcateg=$categorie->getnomcateg();
    $description=$categorie->getdescription();
    $fcin=$categorie->getcin();

    $req->bindValue(':nomcateg',$nomcateg);
    $req->bindValue(':description',$description);
    $req->bindValue(':fcin',$fcin);


    
        $req->execute();
       
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
    
}

public function supprimerCategorie($fcin)
{
    $sql ="DELETE FROM categorie WHERE fcin= :fcin";//: indication f bd bch nqulo fama valeur
    $db =config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindvalue(':fcin',$fcin);
    try {
$query->execute();

    }catch(PDOException $e){
        $e->getMessage();
    }


}



public function detailCategorie($fcin)//k niclicki aa detail nchuf les info d'un adherent(recuperer un enrgst)
{
$sql="SELECT * FROM categorie where fcin=$fcin";
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

function modifierCategorie($categorie,$fcin)
{
        $sql="UPDATE categorie SET nomcateg=:nomcateg, description=:description, fcin=:fcin WHERE fcin=:fcin";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $nomcateg=$categorie->getnomcateg();
        $description=$categorie->getdescription();
        $fcin=$categorie->getcin();
        $datas = array(':nomcateg'=>$nomcateg, 'description'=>$description, 'fcin'=>$fcin);
        $req->bindValue(':nomcateg',$nomcateg);
        $req->bindValue(':description',$description);
        $req->bindValue(':fcin',$fcin);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }


public function recupererCategorie($fcin){
    $sql="SELECT nomcateg,description,fcin from categorie where fcin=$fcin";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
         catch (Exception $e){
             die('Erreur: '.$e->getMessage());
         }
  }


public function rechercheCategorie($key)
{
    $sql = "SELECT * FROM categorie WHERE nomcateg LIKE '%$key%' OR description LIKE '%$key%' OR fcin LIKE '%$key%'";
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