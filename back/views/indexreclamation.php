<?php
include '../controller/ReclamationC.php';

$adC=new ReclamationC();

if (isset($_GET['key'])) {
        $liste = $adC->rechercheReclamation($_GET['key']);
    } else 
$liste=$adC->afficherReclamation() ;

//$liste =$adC->afficherReclamation();

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
            <div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() 
{
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>



<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              

                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="ajouterReclamation.php" class="btn">Ajouter Reclamation</a>
                    <div class="user">
                <div class="fb-share-button" data-href="http://localhost/WEB/Utilisateur/back/views/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2FAffichepofro&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><img src="notifications.png" alt=""></a></div>

                    
                    <div class="img-case">
                        <a href="../../front/index.php  " >
                        <img src="user.png" alt="">
                        </a>
                        
                    </div>
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
                        <h2>recent reclamation</h2>
                        <a href="pdfReclamation.php" class="btn">PDF</a>
                        <a href="tri_reclamation.php" class="btn">Trier</a>
                    </div>
                    
                    <table>
                    <tr>
            
                <td><h5>nom</h5></td>
                <td><h5>prenom</h5></td>
                <td><h5>cin</h5></td>
                <td><h5>email</h5></td>
                <td><h5>province</h5></td>
                <td><h5>sexe</h5></td>
                <td><h5>commentaire</h5></td>
            
                <td><h5>Modifier</h5></td>
                <td><h5>Supprimer</h5></td>
                <td><h5>Repondre</h5></td>
                <td><h5>Mail</h5></td>
                <td><h5>Details</h5></td>
            
             </tr>
             <form method="get" action="indexreclamation.php">
                    <input type="text" name="key" placeholder="chercher..." />
                    <input type="submit" value="chercher" placeholder="chercher..." class="btn btn-default btn-primary" />

                </form>
      <?php
            foreach ($liste as  $adh){
        ?>
            <tr>
                <td><?php echo $adh['nom'];?></td>
                <td><?php echo $adh['prenom'];?></td>
                <td><?php echo $adh['cin'];?></td>
                <td><?php echo $adh['email'];?></td>
                <td><?php echo $adh['province'];?></td>
                <td><?php echo $adh['sexe'];?></td>
                <td><?php echo $adh['commentaire'];?></td>
            
                
                <td><a href="modifierReclamation.php?cin=<?php echo $adh['cin']; ?>" class="btn">modifier</a></td>
                <td><a href="supprimerReclamation.php?cin=<?php echo $adh['cin']; ?>" class="btn">Supprimer</a></td>
                <td><a href="indexrep.php?cin=<?php echo $adh['cin']; ?>" class="btn">Répondre</a></td>
                <td><a href="mailReclamation.php?cin=<?php echo $adh['cin']; ?>" class="btn">Mail</a></td>
    
                <td>
                    <form method="POST"
                    action="detailReclamation.php">
    
                    <input type="submit" value="Details" class="btn" >
                    <input type="hidden" name="cin" value="<?php echo $adh["cin"] ; ?>">
            </form>
            </td>

            
            

            </tr>
        <?php
            }
        ?>
                    </table>
                
                      
                       
                        
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>