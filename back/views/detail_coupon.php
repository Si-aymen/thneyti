

<?php
include '../controller/couponC.php';
$adC=new couponC();
$ad=$adC->detailcoupon($_POST["id"]);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>

<body>
<div class="side-menu">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
       
        <ul>     <li><a href="dashboard.php"><img src="dashboard (2).png" alt="">&nbsp; <span> Dashboard</span> </a></li>
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


</body>
</html>


<div class="container" class="table"

<h10>Detail coupon</h10>
<ul>
<tr>
  <li style ="color:black" ><?php  echo $ad['id'];?></li>
  <li style ="color:black"><?php  echo $ad['date_deb'];?></li>
  <li style ="color:black"><?php  echo $ad['date_experation'];?></li>
  <li style ="color:black"><?php  echo $ad['taux_reduction'];?></li>
  <li style ="color:black"><?php  echo $ad['code_coupon'];?></li>
  <li style ="color:black"><?php  echo $ad['etat'];?></li>





</ul>

</div>




</body>
</html>