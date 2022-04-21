<?php
include '../controller/commentaireC.php';
$adC=new commentaireC();
$adC->supprimer($_GET["id_com"]);
header('location:com.php');//bech nbqach nmchy f page vide (yaamel supprision w yarjaae directement ll page )