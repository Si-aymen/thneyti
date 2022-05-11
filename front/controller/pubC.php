<?php
require dirname(__DIR__)."/config.php";
//require 'model/Moyen_de_transport.php';
require dirname(__DIR__)."/model/pub.php";
class pubC{

	
    public function affichercoupon()
	{
		$db=config::getConnexion();
		 try{
			$query=$db->prepare("SELECT description  FROM annonce where idd=1  ");
			$query->execute();
			$result=$query->fetchAll();//testaaml kn meaa select permet de recuperer les resultat  
			return $result;
	
		}catch(PDOExeption $e)
	
		{
	$e->getMessage();
		}
    }
	

    
  


}	
?>