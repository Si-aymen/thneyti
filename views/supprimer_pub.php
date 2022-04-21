<?php
include '../controller/pubC.php';
$adC=new pubC();
$adC->supprimer($_GET["id_publication"]);
header('location:index_pub.php');//bech nbqach nmchy f page vide (yaamel supprision w yarjaae directement ll page )