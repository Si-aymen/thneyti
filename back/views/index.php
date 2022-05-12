<?php
include '../controller/userC.php';

$adC=new userC();

if (isset($_GET['key'])) {
        $liste = $adC->rechercheUser($_GET['key']);
    } else 
$liste=$adC->afficherUser() ;     
/*$db = config::getConnexion() ; 
        $sort="";
        if(isset ($_GET['sort']))
        {
        if ($_GET['sort']=="a-z")
        {
            $sort="Nom ASC";
        }
        if($_GET['sort']=="z-a")
        {
            $sort="Nom DESC";
        }
        if ($_GET['sort']=="ua-z")
        {
            $sort="Prenom ASC";
        }
        if($_GET['sort']=="uz-a")
        {
            $sort="Prenom DESC";
        }
                              }
                              $liste=$db->prepare("SELECT * FROM user ORDER BY  $sort");
                             
                             $liste->execute();
                             */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>THNEYTI ADMIN</title>
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
              
                <form method="get" action="index.php">
                <div class="search">
                    <input type="text" name="key" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                </form>
               
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
        <div class="content">
            <div class="cards">
                
                
               
               
            </div>


		
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                   <!--  <select name="sort"  value="sort">
                       <option value="" class="d-none d-md-flex ms-4" selected>---Select Option---</option>
                        <option value="a-z" <?php if(isset ($_GET['sort']) && $_GET['sort']=="a-z"){echo "selected";} ?> > Nom (ASC)</option>
                        <option value="z-a" <?php if(isset ($_GET['sort']) && $_GET['sort']=="z-a"){echo "selected";} ?>>Nom (DESC)</option>
                        <option value="ua-z" <?php if(isset ($_GET['sort']) && $_GET['sort']=="a-z"){echo "selected";} ?> > Prenom (ASC)</option>
                        <option value="uz-a" <?php if(isset ($_GET['sort']) && $_GET['sort']=="z-a"){echo "selected";} ?>>Prenom (DESC)</option>
                    </select>  -->
                        <h2>Liste Utilisateurs</h2>
                        <button type="submit" class="btn" id="basic">Trier</button>
                    </div>
                    
                    <table>
                    <tr>
            <td> <h5>ID</h5></td>
            <td><h5>Nom</h5></td>
            <td><h5>Prenom</h5></td>
            <td><h5>Date de Naissance</h5></td>
            <td><h5>Email</h5></td>
            <td> <h5>Mot de passe</h5></td>
            <td><h5>Adresse</h5></td>
            <td><h5>Sexe</h5></td>
            <td><h5>Permis</h5></td>
            <td><h5>Tel</h5></td> 
            <td><h5>Role</h5></td> 
            <td><h5>Modifier</h5></td>
            <td><h5>Supprimer</h5></td>
            <td><h5>Contacter</h5></td>

        </tr>

        <?php
            foreach ($liste as  $adh){
        ?>
            <tr>
            
                 <td><?php echo $adh ['id'];?></td>
                 <td><?php echo $adh ['nom'];?></td>
                 <td><?php echo $adh ['prenom'];?></td>
                 <td><?php echo $adh ['date_de_naissance'];?></td>
                 <td><?php echo $adh ['email'];?></td>
                 <td style=" -webkit-text-security: disc; /* Default */ "><?php echo $adh ['mot_de_passe'];?></td>
                 <td><?php echo $adh ['adresse'];?></td>
                 <td><?php echo $adh ['sexe'];?></td>
                 <td><?php echo $adh ['permis'];?></td>
                 <td><?php echo $adh ['tel'];?></td>
                 <td><?php echo $adh ['role'];?></td>

         
                <td><a href="modifier.php?id=<?php echo $adh['id']; ?>" class="btn">Modifier</a></td>
                <td><a href="supprimer.php?id=<?php echo $adh['id']; ?>" class="btn">Supprimer</a></td>
               
                <td><a href="mailUser.php?id=<?php echo $adh['id']; ?>" class="btn">Contacter</a></td>

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