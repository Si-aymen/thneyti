<?php
require_once '../controller/reservationc.php';


$adR=new reservationc();
$liste =$adR->afficher();





                                 $db=config::getConnexion();
                                 
                                $sort="";
                                if(isset ($_GET['sort']))
                                {
                                if ($_GET['sort']=="a-z")
                                {
                                    $sort="ASC";
                                }
                                if($_GET['sort']=="z-a")
                                {
                                    $sort="DESC";
                                }
                            }
                           // $liste_moy=$db->prepare("SELECT * FROM moyen_de_transport ORDER BY depart $sort");
                           
                         




                        
                        //    if (isset($_GET['key'])) {
                        //     $liste_moy = $moyc->recherche($_GET['key']);
                        // } else 
                        // if (isset($_GET['key'])) {
                        //     $liste_moy = $moyc->recherche($_GET['key']);
                        // } else                   
                              

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>THNEYTI Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
        <ul>            <li><a href="dashboard.php"><img src="dashboard (2).png" alt="">&nbsp; <span> Dashboard</span> </a></li>
            <li><a href="offre.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </a> </li>
            <li><a href="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span>  </a></li>
            <li><a href="indexreclamation.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span>  </a></li>
            <li><a href="indexrep.php"><img src="school.png" alt="">&nbsp;<span>Réponses</span>  </a></li>
            <li><a href="indexcat.php"><img src="school.png" alt="">&nbsp;<span>Catégories</span>  </a></li>
            <li><a href="reservation_index.php"><img src="payment.png" alt="">&nbsp;<span>reservation</span>  </a></li>
            <li><a href="forum.php"><img src="info.png" alt="">&nbsp;<span>forum</span>  </a></li>
            <li><a href ="index_coupon.php"><img src="coupon.png" alt="">&nbsp;<span>code</span></a> </li>
            <li><a href ="index_pub.php"><img src="settings.png" alt="">&nbsp;<span>publicite</span></a> </li>       
            <li><a href="indexticket.php"><img src="settings.png" alt="">&nbsp;<span>Commande</span> </a> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                <form method="get" action="reservation_index.php">
                <div class="search">
                    <input type="text" name="key" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                </form>
                </div>
                <div class="user">
                    <a href="stat.php" class="btn">stats</a>
                    <a href="mails.php" class="btn">mails</a>
                    <div class="user">
                <div class="fb-share-button" data-href="http://localhost/WEB/Utilisateur/back/views/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2FAffichepofro&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><img src="notifications.png" alt=""></a></div>

                    
                    <div class="img-case">
                        <a href="../../front/index.php  " >
                        <img src="user.png" alt="">
                        </a>
                        
                    </div>
                </div>
                    <div class="img-case">
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                
            </div>



            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent reservations</h2>
                        <a href="ajouterreservation.php" class="btn">add new reservation</a>
                    </div>
                    <table>
                    <tr>
            <td>Num</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Adresse</td>
            <td>Email</td>
            <td>Date Inscription</td>
            <td>Modifier</td>
            <td>Supprimer</td>
            <td>Details</td>
            
        </tr>
        <?php
            foreach ($liste as  $adh){
        ?>
            <tr>
                <td><?php echo $adh['numabon'];?></td>
                <td><?php echo $adh['nom'];?></td>
                <td><?php echo $adh['prenom'];?></td>
                <td><?php echo $adh['adresse'];?></td>
                <td><?php echo $adh['email'];?></td>
                <td><?php echo $adh['dateinscription'];?></td>
                <td><a href="modifierreservation.php?numabon=<?php echo $adh['numabon'];?>" class="btn">modifier</a></td>
                <td><a href="supprimerAdherent.php?numabon=<?php echo $adh['numabon']; ?>" class="btn">Supprimer</a></td>
                <td><a href="detailsReservation.php?numabon=<?php echo $adh['numabon']; ?>" class="btn">details</a></td>

            </tr>
        <?php
            }
        ?>
                </div>
                </table>

 
                
            </div>    
        </div>
        



       
                


</body>

</html>