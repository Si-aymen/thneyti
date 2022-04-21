<?php
require_once '../config.php';

class moyen_de_transportc{

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


    public function ajouteradherent($moyen_de_transport){
        $pdo=config::getConnexion();
        try {
            $query=$pdo->prepare(
                "INSERT INTO moyen_de_transport (id_moy,prix,disponibilite,depart,destination,date_depart,AR,date_retour) VALUES (:id_moy,:prix,:disponibilite,:depart,:destination,:date_depart,:AR,:date_retour);"
            );
        
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
    public function supprimer_moyen_de_transport($id){
        $sql ="DELETE FROM  moyen_de_transport WHERE id_moy=:id";
        $db=config::getConnexion();
        $query =$db -> prepare($sql);
        $query->bindValue(':id', $id);
        try {
            $query->execute();
         }  
        catch(PODException $e) {
            $e->getMessage();
        }
    }
    public function detail($id){
        $sql="SELECT * FROM moyen_de_transport WHERE id_moy=$id" ; 
        $db = config::getConnexion();
        try {
            $query =$db ->prepare($sql);
            $query->execute();
            $moyen_de_transport =$query->fetch();
            return $moyen_de_transport; }
            catch(PODException $e) {
                $e->getMessage();
            }
        }

        public function recuperer_moyen_de_transport($id_moy){
            $sql="SELECT * from moyen_de_transport where id_moy=$id_moy";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
                 catch (Exception $e){
                     die('Erreur: '.$e->getMessage());
                 }
          }


          public function getRowsidber() {
            $sql = "SELECT COUNT(*) FROM moyen_de_transport";
            $db = config::getConnexion();
            $stmt = $db->query($sql);
            $count = $stmt->fetchColumn();
            //return $count;
            print $count;
        }
        
             
        

        function modifiermoyen_de_transport($moyen_de_transport,$id_moy)
        {
                $sql="UPDATE moyen_de_transport SET id_moy=:id_moy,prix=:prix,preprix=:preprix,depart=:depart,destination=:destination,date_depart=:date_depart WHERE id_moy=:id_moy";
                
                $db = config::getConnexion();
                //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{        
                $req=$db->prepare($sql);
                $prix=$moyen_de_transport->getprix();
                $preprix=$moyen_de_transport->getpreprix();
                $id_moy=$moyen_de_transport->getid_moy();
                $destination=$moyen_de_transport->getdestination();
                $depart=$moyen_de_transport->getdepart();
                $date_depart=$moyen_de_transport->getdate_depart();
              //  $commentaire=$moyen_de_transport->getcommentaire();
                $datas = array(':id_moy'=>$id_moy, ':prix'=>$prix,'preprix'=>$preprix, ':depart'=>$depart, ':destination'=>$destination,':date_depart'=>$date_depart);
                $req->bindValue(':id_moy',$id_moy);
              //  $req->bindValue(':id_moy',$id_moy);
                $req->bindValue(':prix',$prix);
                $req->bindValue(':preprix',$preprix);
                $req->bindValue(':depart',$depart);
                $req->bindValue(':destination',$destination);
                $req->bindValue('date_depart',$date_depart);

                
                
                    $s=$req->execute();
                    
                   // header('Location: index.php');
                }
                catch (Exception $e){
                    echo " Erreur ! ".$e->getMessage();
           echo " Les datas : " ;
          print_r($datas);
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


    }


?>