
<?php
include '../controller/userC.php';

$adC = new moyen_de_transportc() ;
$adh=$adC->detail($_GET["id_moy"]) ;

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
                <li><?php echo $adh['id_moy'];?></li>
                <li><?php echo $adh['prix'];?></li>
                <li><?php echo $adh['disponibilite'];?></li>
                <li><?php echo $adh['depart'];?></li>
                <li><?php echo $adh['destination'];?></li>
                <li><?php echo $adh['date_depart'];?></li>
                <li><?php echo $adh['AR'];?></li>
                <li><?php echo $adh['date_retour'];?></li>
</ul>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d102155.30702659111!2d10.123098290879899!3d36.85796029999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcc131b0fdd7b8afe!2sAFRICA%20MALL!5e0!3m2!1sfr!2stn!4v1651610826977!5m2!1sfr!2stn" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>
</html>