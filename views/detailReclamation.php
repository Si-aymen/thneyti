<?php
include '../controller/ReclamationC.php';
$adC=new ReclamationC();
$ad=$adC->detail($_POST["cin"]);

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
<h1>Details reclamation</h1>
</div>

<div class="content">
<ul>
<tr>
  <br><br>
  <li><td><h5>nom : </h5></td><?php  echo $ad['nom'];?></li>
  <br>
  <li><td><h5>prenom : </h5></td><?php  echo $ad['prenom'];?></li>
  <br>
  <li><td><h5>cin : </h5></td><?php  echo $ad['cin'];?></li>
  <br>
  <li><td><h5>email : </h5></td><?php  echo $ad['email'];?></li>
  <br>
  <li><td><h5>province : </h5></td><?php  echo $ad['province'];?></li>
  <br>
  <li><td><h5>sexe : </h5></td><?php  echo $ad['sexe'];?></li>
  <br>
  <li><td><h5>commentaire : </h5></td><?php  echo $ad['commentaire'];?></li>
  





</ul>
</div>

</div>




</body>
</html>