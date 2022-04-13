<?php
include '../controller/adherentc.php';

$adC = new reservationc() ;
$adC->detail($_GET["numabon"]) ;

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
    <h1>Details adherents </h1>
    <ul>
                <li><?php echo $adh['numabon'];?></li>
                <li><?php echo $adh['nom'];?></li>
                <li><?php echo $adh['prenom'];?></li>
                <li><?php echo $adh['adresse'];?></li>
                <li><?php echo $adh['email'];?></li>
                <li><?php echo $adh['dateinscription'];?></li>
</ul>

</body>
</html>