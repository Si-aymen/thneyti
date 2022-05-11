

<?php
include '../controller/couponC.php';
$adC=new couponC();
$ad=$adC->detail($_POST["idd"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      div {
        margin-bottom: 10px;
        margin-right : 100px;
      }
      label {
        display: inline-block;
        width: 150px;
        text-align: right;
      }
      form {
  text-align: center;
}
    </style>
<body>

<h1>Detail coupon</h1>
<ul>
<tr>
  <li><?php  echo $ad['id'];?></li>
  <li><?php  echo $ad['date_deb'];?></li>
  <li><?php  echo $ad['date_experation'];?></li>
  <li><?php  echo $ad['taux_reduction'];?></li>
  <li><?php  echo $ad['code_coupon'];?></li>
  <li><?php  echo $ad['etat'];?></li>





</ul>






</body>
</html>