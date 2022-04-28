<?php
require '../config.php';
class posteC{

	/*afficher*/
	public function afficherposte()
	{
		$db=config::getConnexion();
		 try{
			$query=$db->prepare("SELECT * FROM poste");
			$query->execute();
			$result=$query->fetchAll();//testaaml kn meaa select permet de recuperer les resultat  
			return $result;
	
		}catch(PDOExeption $e)
	
		{
	$e->getMessage();
		}
	
	}
/*ajouter*/


public function ajouter($poste){
	$pdo=config::getConnexion();
	try {
		$query=$pdo->prepare(
			"INSERT INTO poste (id_poste,titre,contenu,image,date_de_pub) VALUES (:id_poste,:titre,:contenu,:image,:date_de_pub);"
		);
		$query->execute([
		'id_poste'=>$poste->getid_poste(),
		'titre'=>$poste->gettitre(),
		'contenu'=>$poste->getcontenu(),
		'image'=>$poste->getimage(),
		'date_de_pub'=>$poste->getdate_de_pub(),
			
		]);
	}
	catch(PODException $e) {
		$e->getMessage();
	}
}
public function supprimer($id_poste)
{
    $sql ="DELETE FROM poste WHERE id_poste= :id_poste";//: indication f bd bch nqulo fama valeur
    $db =config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindvalue(':id_poste',$id_poste);
    try {
$query->execute();

    }catch(PDOException $e){
        $e->getMessage();
    }


}



public function detail($id_poste)//k niclicki aa detail nchuf les info d'un adherent(recuperer un enrgst)
{
$sql="SELECT *FROM poste where id_poste=id_poste";
$db=config::getConnexion();
try{
$query=$db->prepare($sql);
$query->execute();
$poste=$query->fetch();//mech lezm fetchall hachty juste fetch ta3 1 seule adherent
return $poste;
}
catch(PDOExeception $e)
{
$e->getMessage();
}

}




  public function getRowsNumber() {
	$sql = "SELECT COUNT(*) FROM poste";
	$db = config::getConnexion();
	$stmt = $db->query($sql);
	$count = $stmt->fetchColumn();
	//return $count;
	print $count;
}
function modifier($posteC,$id_poste)
        {
                $sql="UPDATE poste SET id_poste=:id_poste,titre=:titre,contenu=:contenu,image=:image,date_de_pub=:date_de_pub WHERE id_poste=:id_poste";
                
                $db = config::getConnexion();
                //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{        
                $req=$db->prepare($sql);
                $id_poste=$posteC->getid_poste();
                $titre=$posteC->gettitre();
                $contenu=$posteC->getcontenu();
                $image=$posteC->getimage();
                $date_de_pub=$posteC->getdate_de_pub();
               

              //  $commentaire=$reservation->getcommentaire();
                $datas = array(':id_poste'=>$id_poste, ':titre'=>$titre,'contenu'=>$contenu, ':image'=>$image, ':date_de_pub'=>$date_de_pub);
                $req->bindValue(':id_poste',$id_poste);
              
                $req->bindValue(':titre',$titre);
                $req->bindValue(':contenu',$contenu);
                $req->bindValue(':image',$image);
                $req->bindValue(':date_de_pub',$date_de_pub);

                
                
                    $s=$req->execute();
                    
                   // header('Location: index.php');
                }
                catch (Exception $e){
                    echo " Erreur ! ".$e->getMessage();
           echo " Les datas : " ;
          print_r($datas);
                }
                
            }

			public function recupererposte($id_poste){
				$sql="SELECT * from poste where id_poste=$id_poste";
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