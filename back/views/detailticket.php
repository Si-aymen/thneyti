<?php
include '../controller/ticketC.php';
$adC=new ticketC();
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
    
<h1>Detail ticket</h1>
<ul>
<tr>
     <li><?php echo $ad ['id'];?></li>
     <li><?php echo $ad ['quantite'];?></li>
     <li><?php echo $ad ['prix'];?></li>
</tr>
</ul>
</body>
</html>