<?php
include '../controller/ticketC.php';
$adC=new ticketC();
$adC->supprimer($_GET["id"]);
header('location:index.php');//bech nbqach nmchy f page vide (yaamel supprision w yarjaae directement ll page )