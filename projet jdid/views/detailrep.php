<?php
include '../controller/reponseC.php';
$adC=new reponseC();
$ad=$adC->detailReponse($_POST["cin"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponse</title>
</head>
<body>
    
<h1>Details réponse</h1>
<ul>
<tr>
  <li><?php  echo $ad['cin'];?></li>
  <li><?php  echo $ad['reponse'];?></li>
  <li><?php  echo $ad['coupon'];?></li>
  





</ul>






</body>
</html>