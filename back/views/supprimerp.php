<?php
include '../controller/posteC.php';
$adC=new posteC();
$adC->supprimer($_GET["id_poste"]);
header('location:forum.php');//bech nbqach nmchy f page vide (yaamel supprision w yarjaae directement ll page )