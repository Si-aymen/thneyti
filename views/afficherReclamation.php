<?php 
include '../controller/reclamationC.php';

$AC = new reclamationC();//appel au controlleur
$liste = $AC-> afficherReclamation();
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
        class="text-light">Ajouter une réclamation</a>
        
</button>




  <!-- hedhy ta3 tableau -->
  <table class="table">
  <thead>
    <tr>
    <th scope="col">nom </th>
      <th scope="col">prenom</th>
      <th scope="col">cin</th>
      <th scope="col">email</th>
      <th scope="col">province</th>
      <th scope="col">sexe</th>
      <th scope="col">commentaire</th>
    </tr>
  </thead>
  <tbody>
  

  <?php

  foreach($liste as $ad) {

?>
<tr>
  <td><?php  echo $ad['nom'];?></td>
  <td><?php  echo $ad['prenom'];?></td>
  <td><?php  echo $ad['cin'];?></td>
  <td><?php  echo $ad['email'];?></td>
  <td><?php  echo $ad['province'];?></td>
  <td><?php  echo $ad['sexe'];?></td>
  <td><?php  echo $ad['commentaire'];?></td>
  


  <td>
      
  <button class="btn btn-primary">   <a  href ='index.php?cin=".$cin."'href="modifier.php?cin=<?php echo $ad['cin'];?>" class="text-light">modifier</a>
  </td> 

  <td>
  <button class="btn btn-danger">  <a href="supprimer.php?cin=<?php echo $ad['cin'];?>"class="text-light">supprimer</a>
    <!-- //? bech nqulo k bech ymchy ll variable chnaatyh des variables -->

  </td>
  


<td>
<form methode="POST"
      action="detail.php">
      <input type="submit"value="voir plus de dètail">
      <input type="hidden" name="cin"
             value="<?php echo $ad['cin'];?>">
  </form>
  </td>






      </tr>
<?php
  }
  ?>
  </table>
</body>
</html>

