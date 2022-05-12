<?php
include '../controller/pubC.php';
$adC=new pubC();
$adC->supprimer($_GET["idd"]);
header('location:index_pub.php');//bech nbqach nmchy f page vide (yaamel supprision w yarjaae directement ll page )