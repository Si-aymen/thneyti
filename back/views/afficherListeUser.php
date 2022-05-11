<?php 

include '../controller/userC.php';


$AC = new userC();//appel au controlleur
$liste = $AC-> afficherUser();
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
        class="text-light">add user</a>
        
</button>

  <!-- hedhy ta3 tableau -->
  <table class="table">
  <thead>
    <tr>
    <th scope="col">id </th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">date de naissance</th>
      <th scope="col">email</th>
      <th scope="col">mot de passe</th>
      <th scope="col">adresse</th>
      <th scope="col">sexe</th>
      <th scope="col">permis</th>
      <th scope="col">Tel</th>

    </tr>
  </thead>
</body>
  

  <?php

  foreach($liste as $ad) {

?>
<tr>
  <td><?php  echo $ad['id'];?></td>
  <td><?php  echo $ad['nom'];?></td>
  <td><?php  echo $ad['prenom'];?></td>
  <td><?php  echo $ad['date_de_naissance'];?></td>
  <td><?php  echo $ad['email'];?></td>
  <td><?php  echo $ad['mot_de_passe'];?></td>
  <td><?php  echo $ad['adresse'];?></td>
  <td><?php  echo $ad['sexe'];?></td>
  <td><?php  echo $ad['permis'];?></td>
  <td><?php  echo $ad['tel'];?></td>



  <td>
      
  <button class="btn btn-primary">   <a  href ='index.php?id=".$id."'href="modifier.php?id=<?php echo $ad['id'];?>" class="text-light">modifier</a>
  </td> 

  <td>
  <button class="btn btn-danger">  <a href="supprimer.php?id=<?php echo $ad['id'];?>"class="text-light">supprimer</a>
    <!-- //? bech nqulo k bech ymchy ll variable chnaatyh des variables -->

  </td>
  


<td>
<form methode="POST"
      action="detail.php">
      <input type="submit"value="voir plus de détail">
      <input type="hidden" name="id"
             value="<?php echo $ad['id'];?>">
  </form>
  </td>
      </tr>
<?php
  }
  ?>
  </table>
</body>
</html>

