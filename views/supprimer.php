<?php
include '../controller/couponC.php';
$adC=new couponC();
$adC->supprimer($_GET["id"]);
header('location:index.php');//bech nbqach nmchy f page vide (yaamel supprision w yarjaae directement ll page )