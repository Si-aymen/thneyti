<?php
require_once '../config.php';
class commandeC{

	/*afficher*/
	public function affichercommande()
	{
		$db=config::getConnexion();
		 try{
			$query=$db->prepare("SELECT * FROM commande");
			$query->execute();
			$result=$query->fetchAll();//testaaml kn meaa select permet de recuperer les resultat
			return $result;

		}catch(PDOExeption $e)

		{
	$e->getMessage();
		}

	}
/*ajouter*/


public function ajouter($commande){
	$pdo=config::getConnexion();
	try {
		$query=$pdo->prepare(
			"INSERT INTO commande (numcarte, codecarte, nbticketbus, nbticketmetro, nbtickettrain, nom, prixtotal)
			VALUES ( :numcarte, :codecarte, :nbticketbus, :nbticketmetro, :nbtickettrain, :nom, :prixtotal);"
		);
		$query->execute([
			'numcarte'=>$commande->getnumcarte(),
			'codecarte'=>$commande->getcodecarte(),
      'nbticketbus'=>$commande->getnbticketbus(),
      'nbticketmetro'=>$commande->getnbticketmetro(),
      'nbtickettrain'=>$commande->getnbtickettrain(),
      'nom'=>$commande->getnom(),
      'prixtotal'=>$commande->getprixtotal(),

		]);
	}
	catch(PODException $e) {
		$e->getMessage();
	}
}
public function supprimer($id)
{
    $sql ="DELETE FROM commande WHERE id= :id";//: indication f bd bch nqulo fama valeur
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
$sql="SELECT * FROM commande where id=id";
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

function modifierticket($commande,$id)
{
        $sql="UPDATE commande SET numcarte=:numcarte, codecarte=:codecarte, nbticketbus=:nbticketbus, nbticketmetro =: nbticketmetro, nbtickettrain =: nbtickettrain, nom=:nom, prixtotal=:prixtotal, WHERE id=:id";

        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
        $nom=$commande->getnom();
        $numcarte=$commande->getnumcarte();
        $codecarte=$commande->getcodecarte();
        $nbticketbus=$commande->getnbticketbus();
        $nbticketmetro=$commande->getnbticketmetro();
        $nbtickettrain=$commande->getnbtickettrain();
        $prixtotal=$commande->getnbprixtotal();

        $datas = array(':id'=>$id, ':nom'=>$nom, ':numcarte'=>$numcarte, ':codecarte'=> $codecarte, ':nbticketbus'=>$nbticketbus, ':nbticketmetro'=>$nbticketmetro, ':nbtickettrain'=>$nbtickettrain, ':prixtotal'=>$prixtotal );
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':numcarte',$numcarte);
        $req->bindValue(':codecarte',$codecarte);
        $req->bindValue(':nbticketbus',$nbticketbus);
        $req->bindValue(':nbticketmetro',$nbticketmetro);
        $req->bindValue(':nbtickettrain',$nbtickettrain);
        $req->bindValue(':prixtotal',$prixtotal);



            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

    }


		public function recuperercommande($id){
		    $sql="SELECT * from commande where id=$id";
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
