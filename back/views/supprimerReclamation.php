<?php
include '../controller/ReclamationC.php';
$adC=new ReclamationC();
$adC->supprimer($_GET["cin"]);
header('location:indexreclamation.php');//bech nbqach nmchy f page vide (yaamel supprision w yarjaae directement ll page )