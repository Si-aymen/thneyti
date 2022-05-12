
<?php

require_once '../controller/couponC.php';
require_once '../controller/pubC.php';
require_once '../controller/userC.php';
require_once '../controller/reservationc.php';
require_once '../controller/ReclamationC.php';
require_once '../controller/moyen_de_transportc.php';
require_once '../controller/commentaireC.php';
require_once '../controller/posteC.php';
require_once '../controller/commandeC.php';
$adC=new couponC();
$adP=new pubC();
$adU=new userC();
$adR=new reservationc();
$adRC=new ReclamationC();
$adT=new moyen_de_transportc();
$adCOM=new commentaireC();
$adPO=new posteC();
$adCommande=new commandeC();
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
              
                <div class="card">
                    <div class="box">
                        <h1>


                        <?php
$adC->getRowsNumber();


?>
                        </h1>
                        <h3> Coupons </h3>
                    </div>
                    <li><a href="statistiqueCoupon.php"><img src="teachers.png"
                     alt="">&nbsp; <span> </span> </a></li>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>


                        <?php
$adP->getRowspub();


?>
                        </h1>
                        <h3> Annonces </h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>




                <div class="card">
                    <div class="box">
                        <h1>


                        <?php
$adU->getRowsU();


?>
                        </h1>
                        <h3> Utilisateurs </h3>
                    </div>
                    <li><a href="statU.php"><img src="teachers.png"
                     alt="">&nbsp; <span> </span> </a></li>
                </div>




                <div class="card">
                    <div class="box">
                        <h1>


                        <?php
$adR->getRowsR();


?>
                        </h1>
                        <h3> Reservations </h3>
                    </div>
                  
                    <li><a href="stat.php"><img src="teachers.png"
                     alt="">&nbsp; <span> </span> </a></li>
                </div>




                <div class="card">
                    <div class="box">
                        <h1>


                        <?php
$adRC->getRowsRC();


?>
                        </h1>
                        <h3> Réclamation </h3>
                    </div>
                    <li><a href="statReclamation.php"><img src="teachers.png"
                     alt="">&nbsp; <span> </span> </a></li>
                    <!-- <div class="icon-case">
                        <img src="teachers.png"  href="statReclamation.php" alt="">
                    </div> -->
                </div>






                <div class="card">
                    <div class="box">
                        <h1>


                        <?php
$adT->getRowsT();


?>
                        </h1>
                        <h3> Offres </h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>





                <div class="card">
                    <div class="box">
                        <h1>


                        <?php
$adCOM->getRowsCOM();


?>
                        </h1>
                        <h3> Commentaires </h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>



                <div class="card">
                    <div class="box">
                        <h1>


                        <?php
$adPO->getRowsPO();


?>
                        </h1>
                        <h3> Postes </h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>



                <div class="card">
                    <div class="box">
                        <h1>


                        <?php
$adCommande->getRowsCommande();
?>
                        </h1>
                        <h3> Commandes </h3>
                    </div>
                    <li><a href="statCom.php"><img src="teachers.png"
                     alt="">&nbsp; <span> </span> </a></li>
                </div>





            </div>
            <!-- <a href="tri_date.php">Tri Par date</a> -->
            
            
</body>

</html>