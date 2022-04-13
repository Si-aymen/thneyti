<?php
require '../config.php';

class reservationc{
    public function afficher() {
        $db=config::getConnexion();
        try {
            $query=$db->prepare("SELECT * FROM ress");
            $query->execute();
            $result=$query->fetchAll();
            //$result=$db->query("SELECT * FROM moyen_de_transport");hédhy résumé l 3 lignes li kbal
            return $result;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }


    public function ajouteradherent($reservation){
        $pdo=config::getConnexion();
        try {
            $query=$pdo->prepare(
                "INSERT INTO ress (numabon,nom,prenom,adresse,email,dateinscription) VALUES (:numabon,:nom,:prenom,:adresse,:email,:dateinscription);"
            );
        
            $query->execute([
                'numabon'=>$reservation->get_numabon(),
                'nom'=>$reservation->get_nom(),
                'prenom'=>$reservation->get_prenom(),
                'adresse'=>$reservation->get_adresse(),
                'email'=>$reservation->get_email(),
                'dateinscription'=>$reservation->get_dateinscription()
            ]);
        }
        catch(PODException $e) {
            $e->getMessage();
        }
    }
    public function supprimeradherent($num){
        $sql ="DELETE FROM  ress WHERE numabon =:num ";
        $db=config::getConnexion();
        $query =$db -> prepare($sql);
        $query->bindValue(':num', $num);
        try {
            $query->execute();
         }  
        catch(PODException $e) {
            $e->getMessage();
        }
    }
    public function detail($num){
        $sql="SELECT * FROM ress WHERE numabon=:num " ; 
        $db = config::getConnexion();
        try {
            $query =$db ->prepare($sql);
            $query->execute();
            $adherent =$query->fetch();
            return $adherent; }
            catch(PODException $e) {
                $e->getMessage();
            }
        }


    }


?>