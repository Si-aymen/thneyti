<?php
include '../controller/posteC.php';

$adC=new posteC();

$liste =$adC->afficherposte();
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
$liste=$db->prepare("SELECT * FROM poste ORDER BY titre $sort");

$liste->execute();

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
              
                <div class="user">
                    
                    <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                   
                </div>
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
            <!-- <a href="tri_date.php">Tri Par date</a> -->
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>liste des postes</h2>
                        
                        <a href="ajouterposte.php" class="btn" >Ajouter poste
                        
                    </a>
                    

           

                    <form action="forum.php" class="d-none d-md-flex ms-4" method="GET" >

<select name="sort"  value="sort">
        <option value="" class="d-none d-md-flex ms-4" selected>---Select Option---</option>
<option value="a-z" <?php if(isset ($_GET['sort']) && $_GET['sort']=="a-z"){echo "selected";} ?> > marque (ASC)</option>
<option value="z-a" <?php if(isset ($_GET['sort']) && $_GET['sort']=="z-a"){echo "selected";} ?>>marque (DESC)</option>
</select>
<button type="submit" class="btn btn-primary" id="basic">Sort by</button>

    </form>


                    </div>
                    
                    <table>
                    <tr>
            <td> <h5>id_poste</h5></td>
            <td><h5>titre</h5></td>
            <td><h5>contenu</h5></td>
            
            <td><h5>date_de_pub</h5></td>
            
            <td><h5>Modifier</h5></td>
            <td><h5>Supprimer</h5></td>
            
            <td><h5>ajouter commentaire</h5></td>
            <td><h5>voir commentaire</h5></td>
            
        </tr>
        <!--<form method="get" action="index.php">
                    <input type="text" name="key" placeholder="chercher..." />
                    <input type="submit" value="chercher" placeholder="chercher..." class="btn btn-default btn-primary" />

                </form>-->
        <?php
            foreach ($liste as  $adh){
        ?>
            <tr>
                <td><?php echo $adh['id_poste'];?></td>
                <td><?php echo $adh['titre'];?></td>
                <td><?php echo $adh['contenu'];?></td>
               
                <td><?php echo $adh['date_de_pub'];?></td>
            
                
                <td><a href="modifierp.php?id_poste=<?php echo $adh['id_poste']; ?>" class="btn">modifier</a></td>
                <td><a href="supprimerp.php?id_poste=<?php echo $adh['id_poste']; ?>" class="btn">Supprimer</a></td>
    
               
            <td><a href="ajoutercommentaire.php?id_poste=<?php echo $adh['id_poste']; ?>" class="btn">ajouter commentaire</a></td> 
            <td><a href="com.php?id_poste=<?php echo $adh['id_poste']; ?>" class="btn">voir commentaire</a></td>
            </td>

            </tr>
        <?php
            }
        ?>
                    </table>
                
                      
                       
                        
                    
                </div>
            </div>
        </div>
   


    
    
</body>

</html>