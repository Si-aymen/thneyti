<?php
include '../controller/categorieC.php';
$adC=new categorieC();
$ad=$adC->detailCategorie($_POST["cin"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégorie</title>
</head>
<body>
    
<h1>Details Catégorie</h1>
<ul>
<tr>
  <li><?php  echo $ad['nomcateg'];?></li>
  <li><?php  echo $ad['descrption'];?></li>
  <li><?php  echo $ad['fcin'];?></li>
  





</ul>






</body>
</html>