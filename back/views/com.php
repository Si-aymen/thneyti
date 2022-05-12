<?php 

include '../controller/commentaireC.php';
include '../model/commentaire.php';

$AC = new commentaireC();//appel au controlleur
$liste = $AC-> affichercommentaire();
// var_dump($liste);
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
        </div>            <li><a href="dashboard.php"><img src="dashboard (2).png" alt="">&nbsp; <span> Dashboard</span> </a></li>
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
               
                <div class="user">
                    
                    <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                   
                </div>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>194</h1>
                        <h3>poste</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>commentaires</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>forum</h1>
                       
                    </div>
                    <div class="icon-case">
                        <img src="info.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1></h1>
                        <h3></h3>
                    </div>
                    <div class="icon-case">
                       
                    </div>
                </div>
            </div>
            <!-- <a href="tri_date.php">Tri Par date</a> -->
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>liste des commentaires</h2>
                        <a href="forum.php" class="btn"> retour a la liste des postes</a>
                        <a href="ajoutercommentaire.php" class="btn" >Add commentaire
                        
                    </a>
                    </div>
                    
                    <table>
                    <tr>
                    <td> <h5>id_poste</h5></td>
            <td> <h5>id_commentaire</h5></td>
            <td><h5>contenu</h5></td>
            <td><h5>date_d'ajout</h5></td>
            
           
            <td><h5>Supprimer</h5></td>
          
            
            
            
        </tr>
       
        <?php
            foreach ($liste as  $adh){
        ?>
            <tr>
            <td><?php echo $adh['id_poste'];?></td>
                <td><?php echo $adh['id_com'];?></td>
                
                <td><?php echo $adh['contenu'];?></td>
                
                <td><?php echo $adh['date_com'];?></td>
            
                
              
                <td><a href="supprimerC.php?id_com=<?php echo $adh['id_com']; ?>" class="btn">Supprimer</a></td>
    
                

             
            
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