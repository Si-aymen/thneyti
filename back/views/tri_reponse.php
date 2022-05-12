<?php
include '../controller/reponseC.php';

$adC=new reponseC();

if (isset($_GET['key'])) {
    $liste = $adC->rechercheReponse($_GET['key']);
} else 

$liste=$adC->triparnom() ;

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
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
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
                        <h2>recent reponses</h2>
                        <a href="afficherReponse.php" class="btn">View All</a>
                        <a href="indexrep.php" class="btn">Non Trier</a>
                    </div>
                    
                    <table>
                    <tr>
            
                <td><h5>cin</h5></td>
                <td><h5>reponse</h5></td>
                <td><h5>coupon</h5></td>
            
                <td><h5>Répondre</h5></td>
                <td><h5>Supprimer</h5></td>
                <td><h5>Details</h5></td>
            
             </tr>
             <form method="get" action="indexrep.php">
                    <input type="text" name="key" placeholder="chercher..." />
                    <input type="submit" value="chercher" placeholder="chercher..." class="btn btn-default btn-primary" />

                </form>
      <?php
            foreach ($liste as  $adh){
        ?>
            <tr>
                
                <td><?php echo $adh['cin'];?></td>
                <td><?php echo $adh['reponse'];?></td>
                <td><?php echo $adh['coupon'];?></td>
            
                
                <td><a href="repondre.php?cin=<?php echo $adh['cin']; ?>" class="btn">Répondre</a></td>
                <td><a href="supprimerrep.php?cin=<?php echo $adh['cin']; ?>" class="btn">Supprimer</a></td>
    
                <td>
                    <form method="POST"
                    action="detailrep.php">
    
                    <input type="submit" value="voir Details" class="btn" >
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