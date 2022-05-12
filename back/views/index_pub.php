<?php
include '../controller/pubC.php';

$adC=new pubC();

$liste =$adC->affichercoupon();
if (isset($_GET['key'])) {
    $liste = $adC->recherchepub($_GET['key']);
} else 
$liste=$adC->affichercoupon() ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        .mini_img {
    width: 50px;
    height: auto;
}
    </style>
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
            <!-- <a href="tri_date.php">Tri Par date</a> -->
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>recent publicité</h2>
                        <a href="index_pub.php" class="btn">View All</a>
                        <!-- Button trigger modal -->

                        <a href="ajouterpub.php" class="btn" >Add publicité
                        
                    </a>
                    </div>
                    
                    <table>
                    <tr>
            <td> <h5>ID</h5></td>
            <td><h5>photo</h5></td>
            <td><h5>date debut</h5></td>
            <td><h5>date fin</h5></td>
            <td><h5>Description</h5></td> 
            
            <td><h5>Modifier</h5></td>
            <td><h5>Supprimer</h5></td>
            <td><h5>Details</h5></td>
            
        </tr>

        <form method="get" action="index_pub.php">
                    <input type="text" name="key" placeholder="chercher..." />
                    <input type="submit" value="chercher" placeholder="chercher..." class="btn btn-default btn-primary" />

                </form>
        <?php
            foreach ($liste as  $adh){
        ?>
            <tr>
                <td><?php echo $adh['idd'];?></td>
                <td><img src="img/<?php  echo $adh['photo'];?>" alt="image" class="mini_img"></td>
                <td><?php echo $adh['date_debut'];?></td>
                <td><?php echo $adh['date_fin'];?></td>
                <td><?php echo $adh['description'];?></td>
            
                
                <td><a href="modifier_pub.php?idd=<?php echo $adh['idd']; ?>" class="btn">modifier</a></td>
                <td><a href="supprimer_pub.php?idd=<?php echo $adh['idd']; ?>" class="btn">Supprimer</a></td>
    
                <td>
                    <form method="POST"
                    action="detail_pub.php">
    
                    <input type="submit" value="voir Details" class="btn" >
                    <input type="hidden" name="idd" value="<?php echo $adh["idd"] ; ?>">
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