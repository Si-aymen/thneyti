<?php 

include '../controller/commentaireC.php';
include '../model/commentaire.php';

$AC = new commentaireC();//appel au controlleur
$liste = $AC-> affichercommentaire();
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
<button><a href="index.php">Retour à la liste</a></button>
<body>
<div class="constrainer">
        <button class="btn btn-primary my-5 "><a href ="ajoutercommentaire.php"
        class="text-light">add commentaire</a>
        
</button>





  <!-- hedhy ta3 tableau -->
  <table class="table">
  <thead>
    <tr>
    <th scope="col">id_com </th>
      <th scope="col">contenu </th>
      <th scope="col">date_de_pub</th>
    </tr>
  </thead>
  <tbody>

 
 
  <?php

  foreach($liste as $ad) {

?>
<tr>
  <td><?php  echo $ad['id_com'];?></td>
  <td><?php  echo $ad['contenu'];?></td>
  <td><?php  echo $ad['date_com'];?></td>
<td>
<td>
  <button class="btn btn-primary">   <a  href ="supprimerC.php?id_com=<?php  echo $ad['id_com'];?>" class="text-light">supprimer</a>
    <!-- //? bech nqulo k bech ymchy ll variable chnaatyh des variables -->

  </td>


    
      
      
      
<?php
  }
  ?>
  </table>
</body>
</html>

