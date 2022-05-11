<?php
require '../config.php';

class reservationc{

    public function afficher() {
        $db=config::getConnexion();
        try {
            $query=$db->prepare("SELECT * FROM ress");
            $query->execute();
            $result=$query->fetchAll();
            //$result=$db->query("SELECT * FROM moyen_de_transport") ;   hédhy résumé l 3 lignes li kbal
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
    public function detail($numabon){
        $sql="SELECT * FROM ress WHERE numabon=numabon" ; 
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

        public function recuperer_reservation($numabon){
            $sql="SELECT * from ress where numabon=$numabon";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
                 catch (Exception $e){
                     die('Erreur: '.$e->getMessage());
                 }
          }


          public function getRowsNumber() {
            $sql = "SELECT COUNT(*) FROM ress";
            $db = config::getConnexion();
            $stmt = $db->query($sql);
            $count = $stmt->fetchColumn();
            return $count;
            //print $count;
        }
        
             
        

        function modifierreservation($reservationc,$numabon)
        {
                $sql="UPDATE ress SET numabon=:numabon,nom=:nom,prenom=:prenom,adresse=:adresse,email=:email,dateinscription=:dateinscription WHERE numabon=:numabon";
                
                $db = config::getConnexion();
                //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{        
                $req=$db->prepare($sql);
                $numabon=$reservationc->get_numabon();
                $nom=$reservationc->get_nom();
                $prenom=$reservationc->get_prenom();
                $adresse=$reservationc->get_adresse();
                $email=$reservationc->get_email();
                $dateinscription=$reservationc->get_dateinscription();

              //  $commentaire=$reservation->getcommentaire();
                $datas = array(':numabon'=>$numabon, ':nom'=>$nom,'prenom'=>$prenom, ':adresse'=>$adresse, ':email'=>$email,':dateinscription'=>$dateinscription);
                $req->bindValue(':numabon',$numabon);
              
                $req->bindValue(':nom',$nom);
                $req->bindValue(':prenom',$prenom);
                $req->bindValue(':adresse',$adresse);
                $req->bindValue(':email',$email);
                $req->bindValue('dateinscription',$dateinscription);

                
                
                    $s=$req->execute();
                    
                   // header('Location: index.php');
                }
                catch (Exception $e){
                    echo " Erreur ! ".$e->getMessage();
           echo " Les datas : " ;
          print_r($datas);
                }
                
            }


            


    }


?>