<?php
include '../controller/moyen_de_transportc.php';

$adC = new moyen_de_transportc() ;
$adC->supprimer_moyen_de_transport($_GET["id_moy"]) ;
header ("Location:offre.php");

?>