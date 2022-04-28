<?php 

include '../controller/posteC.php';
include '../model/poste.php';/*
include '../controller/commentaireC.php';
include '../model/commentaire.php';*/
$AC = new posteC();//appel au controlleur
$liste = $AC-> afficherposte();
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
        <button class="btn btn-primary my-5 "><a href ="ajouter.php" Onclick="return validateForm()"
        class="text-light">add post</a>
       
</button>




  <!-- hedhy ta3 tableau -->
  <table class="table">
  <thead>
    <tr>
    <th scope="col">id_poste </th>
      <th scope="col">titre</th>
      <th scope="col">contenu </th>
      <th scope="col">image</th>
      <th scope="col">date_de_pub</th>
      <th scope="col">detail</th>
      <th scope="col"> </th>
      <th scope="col"> </th>
      <th scope="col">commentaire</th>
    </tr>
  </thead>
  <tbody>



  <?php

  foreach($liste as $ad) {

?>
<tr>
  <td><?php  echo $ad['id_poste'];?></td>
  <td><?php  echo $ad['titre'];?></td>
  <td><?php  echo $ad['contenu'];?></td>
  <td><?php  echo $ad['image'];?></td>
  <td><?php  echo $ad['date_de_pub'];?></td>
  <td>
  <button class="btn btn-primary  "><a href ="detail.php"
        class="text-light">details</a>
  </td>

  <td>

  <button class="btn btn-primary">   <a  href ="supprimer.php?id_poste=<?php  echo $ad['id_poste'];?>" class="text-light">supprimer</a>
    <!-- //? bech nqulo k bech ymchy ll variable chnaatyh des variables -->

  </td>
  <td>
      
  <button class="btn btn-primary">   <a  href ="modifier.php?id=<?php echo $ad['id_poste'];?>" class="text-light">modifier</a>
  </td> 



<td>


<button class="btn btn-primary  "><a href ="ajoutercommentaire.php"
        class="text-light">ajouter commentaire</a>
        
</button>

<button class="btn btn-primary  "><a href ="com.php"
        class="text-light">voirs commentaire</a>
        
</button>
      
      
      
      
<?php
  }
  ?>
  </table>
</body>
</html>

