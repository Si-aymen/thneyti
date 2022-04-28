

<?php
include '../controller/reservationc.php';

$adC = new reservationc() ;
$adh=$adC->detail($_GET["numabon"]) ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details panel</title>
</head>
<body>
    <h1>Details reservation </h1>
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