<?php

require_once '../controller/moyen_de_transportc.php';


$moyc=new moyen_de_transportc();
$liste_moy = $moyc->afficher();





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
                            $liste_moy=$db->prepare("SELECT * FROM moyen_de_transport ORDER BY depart $sort");
                           
                           $liste_moy->execute();




                        
                           if (isset($_GET['key'])) {
                            $liste_moy = $moyc->recherche($_GET['key']);
                        } else 
                        if (isset($_GET['key'])) {
                            $liste_moy = $moyc->recherche($_GET['key']);
                        } else                   
                              

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
        <ul>
            <li><a href="dashboard.php"><img src="dashboard (2).png" alt="">&nbsp; <span> Dashboard</span> </a></li>
            <li><a href="offre.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </a> </li>
            <li><a href="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span>  </a></li>
            <li><a href="indexreclamation.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span>  </a></li>
            <li><a href="indexrep.php"><img src="school.png" alt="">&nbsp;<span>R??ponses</span>  </a></li>
            <li><a href="indexcat.php"><img src="school.png" alt="">&nbsp;<span>Cat??gories</span>  </a></li>
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
            <div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() 
{
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>



<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              
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

                        <h2>Offres</h2>
                        <a href="ajouter_moyen_de_transport.php" class="btn">add new Moy transport</a>
                        </div>
                        <form action="reservation_index.php" class="d-none d-md-flex ms-4" method="GET" >
                        <button type="submit" class="btn btn-primary" id="basic">Sort by</button>
            <select name="sort"  value="sort">
                    <option value="" class="d-none d-md-flex ms-4" selected>---Select Option---</option>
          <option value="a-z" <?php if(isset ($_GET['sort']) && $_GET['sort']=="a-z"){echo "selected";} ?> > Lastname (ASC)</option>
          <option value="z-a" <?php if(isset ($_GET['sort']) && $_GET['sort']=="z-a"){echo "selected";} ?>>Lastname (DESC)</option>
      </select>

      
     
     
            </form>

<table>
                    <tr>
            <td>id_moy</td>
            <td>prix</td>
            <td>disponibilite</td>
            <td>depart</td>
            <td>destination</td>
            <td>date_depart</td>
            <td>AR</td>
            <td>date_retour</td>
            <td>Modifier</td>
            <td>Supprimer</td>
            <td>Details</td>
            
        </tr>
        <?php
            foreach ($liste_moy as  $adh){
        ?>
            <tr>
                <td><?php echo $adh['id_moy'];?></td>
                <td><?php echo $adh['prix'];?></td>
                <td><?php echo $adh['disponibilite'];?></td>
                <td><?php echo $adh['depart'];?></td>
                <td><?php echo $adh['destination'];?></td>
                <td><?php echo $adh['date_depart'];?></td>
                <td><?php echo $adh['AR'];?></td>
                <td><?php echo $adh['date_retour'];?></td>
                <td><a href="modifierreservation.php?id_moy=<?php echo $adh['id_moy'];?>" class="btn">modifier</a></td>
                <td><a href="supprimer_moyen_de_transport.php?id_moy=<?php echo $adh['id_moy']; ?>" class="btn">Supprimer</a></td>
                <td>
                    <form method="POST"
                    action="detailsReservation.php">
                    <input type="submit" value="voir Details" class="btn" >
                    <input type="hidden" name="id_moy" value="<?php echo $adh["id_moy"] ; ?>">
            </form>
            </td>
            </tr>
        <?php
            }
        ?>
                    </table>

                </div>
                </div>
                


</body>

</html>