<?php
include '../controller/adherentc.php';

$adC = new reservationc() ;
$adC->supprimeradherent($_GET["numabon"]) ;
//header ("Location:afficherListeAdherents.php");
header ("Location:index.php");

?>