<?php
require '../config.php';
include '../model/reclamation.php';
include '../model/reponse.php';
class ReclamationC{

	/*afficher*/
	public function afficherReclamation()
	{
		$db=config::getConnexion();
		 try{
			$query=$db->prepare("SELECT * FROM reclamation");
			$query->execute();
			$result=$query->fetchAll();//testaaml kn meaa select permet de recuperer les resultat  
			return $result;
	
		}catch(PDOExeption $e)
	
		{
	$e->getMessage();
		}
	
	}
/*ajouter*/


public function ajouter($reclamation){
    $sql="insert into reclamation (nom,prenom,cin,email,province,sexe,commentaire) values (:nom,:prenom, :cin,:email,:province,:sexe,:commentaire)";
    $sql1="insert into reponses (cin) values (:cin)";
    $db = config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $req1=$db->prepare($sql1);
    $nom=$reclamation->getnom();
    $prenom=$reclamation->getprenom();
    $cin=$reclamation->getcin();
    $email=$reclamation->getemail();
    $province=$reclamation->getprovince();
    $sexe=$reclamation->getsexe();
    $commentaire=$reclamation->getcommentaire();

    $req->bindValue(':nom',$nom);
    $req->bindValue(':prenom',$prenom);
    $req->bindValue(':cin',$cin);
    $req->bindValue(':email',$email);
    $req->bindValue(':province',$province);
    $req->bindValue(':sexe',$sexe);
    $req->bindValue(':commentaire',$commentaire);
    $req1->bindValue(':cin',$cin);


    
        $req->execute();
       
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
    
}
public function supprimer($cin)
{
    $sql ="DELETE FROM reclamation WHERE cin= :cin";//: indication f bd bch nqulo fama valeur
    $db =config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindvalue(':cin',$cin);
    try {
$query->execute();

    }catch(PDOException $e){
        $e->getMessage();
    }


}



public function detail($cin)//k niclicki aa detail nchuf les info d'un adherent(recuperer un enrgst)
{
$sql="SELECT * FROM reclamation where cin=$cin";
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

function modifierReclamation($reclamation,$cin)
{
        $sql="UPDATE reclamation SET nom=:nom, prenom=:prenom, cin=:cin, email=:email, province=:province, sexe=:sexe , commentaire=:commentaire WHERE cin=:cin";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $nom=$reclamation->getnom();
        $prenom=$reclamation->getprenom();
        $cin=$reclamation->getcin();
        $email=$reclamation->getEmail();
        $province=$reclamation->getprovince();
        $sexe=$reclamation->getsexe();
        $commentaire=$reclamation->getcommentaire();
        $datas = array(':nom'=>$nom, ':prenom'=>$prenom, ':cin'=>$cin, ':sexe'=>$sexe,':province'=>$province, 'email'=>$email, 'commentaire'=>$commentaire);
        $req->bindValue(':cin',$cin);
        $req->bindValue(':cin',$cin);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':province',$province);
        $req->bindValue(':email',$email);
        $req->bindValue(':commentaire',$commentaire);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }


public function recupererReclamation($cin){
    $sql="SELECT * from reclamation where cin=$cin";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
         catch (Exception $e){
             die('Erreur: '.$e->getMessage());
         }
  }


public function rechercheReclamation($key)
{
    $sql = "SELECT * FROM reclamation WHERE cin LIKE '%$key%' OR prenom LIKE '%$key%' OR nom LIKE '%$key%'";
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