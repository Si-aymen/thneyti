<?php
include '../controller/reservationc.php';

$adC = new reservationc() ;
$adC->supprimeradherent($_GET["numabon"]) ;
//header ("Location:afficherListeAdherents.php");
header ("Location:index.php");

?>