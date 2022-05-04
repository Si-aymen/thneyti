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
    <title>Document</title>
</head>
<body>
    
<h1>Details reclamation</h1>
<ul>
<tr>
  <li><?php  echo $ad['nom'];?></li>
  <li><?php  echo $ad['prenom'];?></li>
  <li><?php  echo $ad['cin'];?></li>
  <li><?php  echo $ad['email'];?></li>
  <li><?php  echo $ad['province'];?></li>
  <li><?php  echo $ad['sexe'];?></li>
  <li><?php  echo $ad['commentaire'];?></li>
  





</ul>






</body>
</html>