<?php
include '../controller/categorieC.php';
$adC=new categorieC();
$adC->supprimerCategorie($_GET["cin"]);
header('location:indexcat.php');//bech nbqach nmchy f page vide (yaamel supprision w yarjaae directement ll page )