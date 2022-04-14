<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
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
<div class="side-menu">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
       
        <ul>
            <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </li>
            <li><img src="teacher2.png" alt="">&nbsp;<span>Clients</span> </li>
            <li><img src="school.png" alt="">&nbsp;<span>Reclamations</span> </li>
            <li><img src="payment.png" alt="">&nbsp;<span>Income</span> </li>
            <li><img src=".png" alt="">&nbsp;<span>code</span> </li>
            <li><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>


</body>
</html>


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
 
</head>
<body>

<button><a href="index.php">Retour à la liste</a></button>


<form action="" method="POST">
 <div><pre>
 
<label for="date_deb">date debut: <input type="date"  id="date_deb:" name="date_deb" >    
<label for="date_experation">date experation: <input type="date"  id="date_experation" name="date_experation">
<label for="taux_reduction">taux reduction: <input type="number" id="taux_reduction"   name="taux_reduction">
<label for="code_coupon">code coupon:  <input type="text" id="code_coupon" placeholder="entrer votre code coupon" name="code_coupon" >


				
			</div>    </pre> 
<button    type="submit" class="btn btn-primary" name="submit" >Submit </button> 

        </form>
        <?php if($s==1)
{
$couponC->ajouter($coupon);
echo "<script>alert('Vous avez ajouter un coupon');</script>";
        echo "<script> window.location.href='index.php'</script>";
}?>  
</body>
</html> 