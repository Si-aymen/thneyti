
<?php
include '../controller/couponC.php';

$adC=new couponC();

$liste =$adC->affichercoupon();
if (isset($_GET['key'])) {
    $liste = $adC->rechercheCoupon($_GET['key']);
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
    <!-- Bootstrap CSS -->
  


    <title>THNEYTI Admin Panel</title>
    
</head>

<body>

    <div class="side-menu">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
        <ul>
            <li><a href="index.php"><img src="dashboard (2).png" alt="">&nbsp; <span> Dashboard</span> </a></li>
            <li><a href="index.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </a> </li>
            <li><a href="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span>  </a></li>
            <li><a href="indexreclamation.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span>  </a></li>
            <li><a href="indexrep.php"><img src="school.png" alt="">&nbsp;<span>Réponses</span>  </a></li>
            <li><a href="indexcat.php"><img src="school.png" alt="">&nbsp;<span>Catégories</span>  </a></li>
            <li><a href="reservation_index.php"><img src="payment.png" alt="">&nbsp;<span>reservation</span>  </a></li>
            <li><a href ="index_coupon.php"><img src="coupon.png" alt="">&nbsp;<span>code</span></a> </li>
            <li><a href ="index_pub.php"><img src="settings.png" alt="">&nbsp;<span>publicite</span></a> </li>
            <li><a href="index.php"><img src="help-web-button.png" alt="">&nbsp; <span>Help</span> </a></li>
            <li><a href="index.php"><img src="settings.png" alt="">&nbsp;<span>Settings</span> </a> </li>
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
                    
                   
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
              
                <div class="card">
                    <div class="box">
                        <h1>


                        <?php
$adC->getRowsNumber();


?>
                        </h1>
                        <h3>offre coupon </h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
               
               
            </div>
            <!-- <a href="tri_date.php">Tri Par date</a> -->
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>recent coupon code</h2>
                        <a href="index_coupon.php" class="btn">View All</a>
                        <a href="ajouter_coupon.php" class="btn">ADD coupon</a>
                        
                        
                        <form method="POST" action="pdf.php" >
                       <input type="submit" name="create_pdf" class="btn" value="PDF">
                     </form>
                    </div>
                    
                    <table>
                    <tr>
            <td> <h5>ID</h5></td>
            <td><h5>date debut</h5></td>
            <td><h5>date experation</h5></td>
            <td><h5>taux reduction</h5></td>
            <td><h5>code coupon</h5></td>
            <td><h5> etat</h5></td>
            
            <td><h5>Modifier</h5></td>
            <td><h5>Supprimer</h5></td>
            <td><h5>Details</h5></td>
         
        </tr>
        <form method="get" action="index_coupon.php">
                    <input type="text" name="key" placeholder="chercher..." />
                    <input type="submit" value="chercher" placeholder="chercher..." class="btn btn-default btn-primary" />

                </form>
                
        <?php
            foreach ($liste as  $adh){
        ?>
            <tr>        
                <td><?php echo $adh['id'];?></td>
                <td><?php echo $adh['date_deb'];?></td>
                <td><?php echo $adh['date_experation'];?></td>
                <td><?php echo $adh['taux_reduction'];?></td>
                <td><?php echo $adh['code_coupon'];?></td>
                <td><?php echo $adh['etat'];?></td>
                <td><a href="modifier_coupon.php?id=<?php echo $adh['id']; ?>" class="btn">modifier</a></td>
                <td><a href="supprimer_coupon.php?id=<?php echo $adh['id']; ?>" class="btn">Supprimer</a></td>
                
                
                <td>
                    <form method="POST"
                    action="detail_coupon.php">
    
                    <input type="submit" value="Details" class="btn" >
                    <input type="hidden" name="id" value="<?php echo $adh["id"] ; ?>">
            </form>
            </td>
                <td>
                <div>
            
                     </div>
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