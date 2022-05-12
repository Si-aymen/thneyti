<?php
//require 'config.php';
require dirname(__DIR__)."/config.php";
//require 'model/Moyen_de_transport.php';
require dirname(__DIR__)."/model/Moyen_de_transport.php";



class moyen_de_transportc{

    public function ajouter($moyen_de_transport){
        $pdo=config::getConnexion();
        try {
            $query=$pdo->prepare(
                "INSERT INTO moyen_de_transport (id_moy,prix,disponibilite,depart,destination,date_depart,AR,date_retour) 
                VALUES (:id_moy,:prix,:disponibilite,:depart,:destination,:date_depart,:AR,:date_retour);" );
        
            $query->execute([
                'id_moy'=>$moyen_de_transport->get_id_moy(),
                'prix'=>$moyen_de_transport->get_prix(),
                'disponibilite'=>$moyen_de_transport->get_disponibilite(),
                'depart'=>$moyen_de_transport->get_depart(),
                'destination'=>$moyen_de_transport->get_destination(),
                'date_depart'=>$moyen_de_transport->get_date_depart(),
                'AR'=>$moyen_de_transport->get_AR(),
                'date_retour'=>$moyen_de_transport->get_date_retour()
            ]);
        }
		catch(PODException $e) {
            $e->getMessage();
        }
	}

    public function afficher() {
        $db=config::getConnexion();
        try {
            $query=$db->prepare("SELECT * FROM moyen_de_transport");
            $query->execute();
            $result=$query->fetchAll();
            //$result=$db->query("SELECT * FROM moyen_de_transport") ;   hédhy résumé l 3 lignes li kbal
            return $result;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

    public function getRowsNumber_moy() {
        $sql = "SELECT COUNT(*) FROM moyen_de_transport";
        $db = config::getConnexion();
        $stmt = $db->query($sql);
        $count = $stmt->fetchColumn();
        return $count;
        // print $count;
    }


    public function detail($id_moy){
        $sql="SELECT * FROM moyen_de_transport WHERE id_moy=id_moy" ; 
        $db=config::getConnexion();

            try {
            $query=$db->prepare($sql);
            $query->execute();
            $reservation=$query->fetch();
            return $reservation; }
            catch(PODException $e) {
                $e->getMessage();
          }
    }


}

?>