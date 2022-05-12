<?php
require_once '../config.php';
class ticketC{

	/*afficher*/
	public function afficherTicket()
	{
		$db=config::getConnexion();
		 try{
			$query=$db->prepare("SELECT * FROM ticket");
			$query->execute();
			$result=$query->fetchAll();//testaaml kn meaa select permet de recuperer les resultat
			return $result;

		}catch(PDOExeption $e)

		{
	$e->getMessage();
		}

	}
/*ajouter*/


public function ajouter($ticket){
	$pdo=config::getConnexion();
	try {
		$query=$pdo->prepare(
			"INSERT INTO ticket (quantite,prix)
			VALUES ( :quantite, :prix);"
		);
		$query->execute([
			'quantite'=>$ticket->getQuantite(),
			'prix'=>$ticket->getPrix(),

		]);
	}
	catch(PODException $e) {
		$e->getMessage();
	}
}
public function supprimer($id)
{
    $sql ="DELETE FROM ticket WHERE id= :id";//: indication f bd bch nqulo fama valeur
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
$sql="SELECT *FROM ticket where id=id";
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

function modifierticket($ticket,$id)
{
        $sql="UPDATE ticket SET quantite=:quantite, prix=:prix WHERE id=:id";

        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
        $quantite=$ticket->getquantite();
        $prix=$ticket->getprix();

        $datas = array(':id'=>$id, ':quantite'=>$quantite, ':prix'=>$prix);
        $req->bindValue(':id',$id);
        $req->bindValue(':quantite',$quantite);
        $req->bindValue(':prix',$prix);



            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

    }


		public function recupererticket($id){
		    $sql="SELECT * from ticket where id=$id";
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
