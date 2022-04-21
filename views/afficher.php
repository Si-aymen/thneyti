<?php 

include '../controller/pubC.php';
include '../model/pub.php';

$AC = new pubC();//appel au controlleur
$liste = $AC-> affichercoupon();
// var_dump($liste);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thneyti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="constrainer">
        <button class="btn btn-primary my-5 "><a href ="ajouter.php"
        class="text-light">add coupon</a>
        
</button>




  <!-- hedhy ta3 tableau -->
  <table class="table">
  <thead>
    <tr>
       <th scope="col">id </th>
      <th scope="col">photo</th>
      <th scope="col">date_debut</th>
      <th scope="col">date_fin</th>

    </tr>
  </thead>
  <tbody>
  

  <?php

  foreach($liste as $ad) {

?>
<tr>
  <td><?php  echo $ad['id'];?></td>
  <td><?php  echo $ad['photo'];?></td>
  <td><?php  echo $ad['date_debut'];?></td>
  <td><?php  echo $ad['date_fin'];?></td>
 


      </tr>
<?php
  }
  ?>
  </table>
</body>
</html>

