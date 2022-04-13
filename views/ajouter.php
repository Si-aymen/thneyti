<?php 
include '../controller/couponC.php';
include '../model/coupon.php';

$couponC=new couponC();
$s=0;  
if(isset($_POST['date_deb'])&&
isset($_POST['date_experation'])&& isset($_POST['taux_reduction']) && 
isset($_POST['code_coupon'])

)
{
    $coupon=new coupon($_POST['date_deb'],$_POST['date_experation'],$_POST['taux_reduction'],$_POST['code_coupon']);
 $s=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<button><a href="afficherListeCoupon.php">Retour à la liste</a></button>
<div class="container my_5"></div>
<form action="" method="POST">
 <div><pre>
<label for="date_deb">date debut: <input type="date"  id="date_deb:" name="date_deb" >    
<label for="date_experation">date experation: <input type="date"  id="date_experation" name="date_experation">
<label for="taux_reduction">taux reduction: <input type="number" id="taux_reduction"   name="taux_reduction">
<label for="code_coupon">code coupon:  <input type="text" id="code_coupon" placeholder="entrer votre code coupon" name="code_coupon" >


				
			</div>    </pre> 
<button type="submit" class="btn btn-primary" name="submit" >Submit</button> 

        </form>
        <?php if($s==1)
{
$couponC->ajouter($coupon);
}?>  
</body>
</html> 