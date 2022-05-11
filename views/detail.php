<?php
include '../controller/userC.php';
$adC=new userC();
$ad=$adC->detail($_POST["id"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THNEYTI</title>
</head>
<body>
    
<h1>Detail User</h1>
<ul>
<tr>
     <li><?php echo $ad ['id'];?></li>
     <li><?php echo $ad ['nom'];?></li>
     <li><?php echo $ad ['prenom'];?></li>
     <li><?php echo $ad ['date_de_naissance'];?></li>
     <li><?php echo $ad ['email'];?></li>
     <li><?php echo $ad ['mot_de_passe'];?></li>
     <li><?php echo $ad ['adresse'];?></li>
     <li><?php echo $ad ['sexe'];?></li>
     <li><?php echo $ad ['permis'];?></li>
     <li><?php echo $ad ['tel'];?></li>
</tr>
</ul>
</body>
</html>