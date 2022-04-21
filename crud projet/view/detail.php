<?php
include '../controller/posteC.php';
$adC=new posteC();
$ad=$adC->detail($_GET["id_poste"]);

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
    
<h1>detail du poste</h1>
<ul>
<tr>
  <li><?php  echo $ad['id_poste'];?></li>
  <li><?php  echo $ad['titre'];?></li>
  <li><?php  echo $ad['contenu'];?></li>
  <li><?php  echo $ad['image'];?></li>
  <li><?php  echo $ad['date_de_pub'];?></li>
  





</ul>






</body>
</html>