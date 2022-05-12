<?php
include '../controller/reponseC.php';
$adC=new reponseC();
$adC->supprimerReponse($_GET["cin"]);
header('location:indexrep.php');//bech nbqach nmchy f page vide (yaamel supprision w yarjaae directement ll page )