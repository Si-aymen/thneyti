<?php
require '../config.php';
include '../model/user.php';
class userC{

	/*afficher*/
	public function afficherUser()
	{
		$db=config::getConnexion();
		 try{
			$query=$db->prepare("SELECT * FROM user");
			$query->execute();
			$result=$query->fetchAll();//testaaml kn meaa select permet de recuperer les resultat  
			return $result;
	
		}catch(PDOExeption $e)
	
		{
	$e->getMessage();
		}
	
	}
/*ajouter*/


public function ajouter($user){
	$pdo=config::getConnexion();
	try {
		$query=$pdo->prepare(
			"INSERT INTO user (id,nom,prenom,date_de_naissance,email,mot_de_passe,adresse,sexe,permis,tel)
			VALUES (:id, :nom, :prenom, :date_de_naissance, :email, :mot_de_passe, :adresse, :sexe, :permis, :tel);"
		);
		$query->execute([
            'id'=>$user->getId(),
			'nom'=>$user->getNom(),
			'prenom'=>$user->getPrenom(),
			'date_de_naissance'=>$user->getDateDeNaissance(),
			'email'=>$user->getEmail(),
			'mot_de_passe'=>$user->getMotDePasse(),
			'adresse'=>$user->getAdresse(),
			'sexe'=>$user->getSexe(),
			'permis'=>$user->getPermis(),
			'tel'=>$user->getBankID(),	
		]);
	}
	catch(PODException $e) {
		$e->getMessage();
	}
}
public function supprimer($id)
{
    $sql ="DELETE FROM user WHERE id= :id";//: indication f bd bch nqulo fama valeur
    $db =config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindvalue(':id',$id);
    try {
$query->execute();

    }catch(PDOException $e){
        $e->getMessage();
    }


}



public function detail($id)//k niclicki aa detail nchuf les info d'un user(recuperer un enrgst)
{
$sql="SELECT *FROM user where id=id";
$db=config::getConnexion();
try{
$query=$db->prepare($sql);
$query->execute();
$adherent=$query->fetch();//mech lezm fetchall hachty juste fetch ta3 1 seule user
return $adherent;
}
catch(PDOExeception $e)
{
$e->getMessage();
}

}

	

 function modifier($userC, $id)
	{
        var_dump('test');
		$sql="UPDATE user SET id=:id, nom=:nom, prenom=:prenom, date_de_naissance=:date_de_naissance, email=:email, mot_de_passe=:mot_de_passe, adresse=:adresse , sexe=:sexe  , tel=:tel WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        

        $datas = array(':id'=>$id,':nom'=>$nom, ':prenom'=>$prenom, ':date_de_naissance'=>$date_de_naissance, ':email'=>$email,':mot_de_passe'=>$mot_de_passe, 'sexe'=>$sexe, 'permis'=>$permis, 'tel'=>$tel);
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':date_de_naissance',$date_de_naissance);
        $req->bindValue(':email',$email);
        $req->bindValue(':mot_de_passe',$mot_de_passe);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':permis',$permis);
        $req->bindValue(':tel',$tel);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	} 

    public function recupererUser($id){
        $sql="SELECT * from user where id=$id";
        $db = config::getConnexion();
        try{
        $query=$db->prepare($sql);
        $query->execute();
        $liste=$query->fetch();
        return $liste;
        }
             catch (Exception $e){
                 die('Erreur: '.$e->getMessage());
             }
      }


      public function rechercheUser($key)
      {
          $sql = "SELECT * FROM user WHERE id LIKE '%$key%' OR nom LIKE '%$key%' OR prenom LIKE '%$key%' OR  email LIKE '%$key%' OR  tel LIKE '%$key%' " ;
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