<?php
include '../controller/couponC.php';
$adC=new couponC();
$adC->supprimercoupon($_GET["id"]);
header('location:index_coupon.php');//bech nbqach nmchy f page vide (yaamel supprision w yarjaae directement ll page )