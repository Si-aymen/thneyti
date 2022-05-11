<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
 
  <title>Document</title>
</head>

<body>
 <div class="side-menu">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
   
        <ul>
            <li><a href ="index.php"><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span></a> </li>
            <li><a href ="index.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span></a>  </li>
            <li><a href ="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span></a>  </li>
            <li><a href ="index.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span> </a> </li>
            <li><a href ="index.php"><img src="payment.png" alt="">&nbsp;<span>Income</span></a>  </li>
            <li><a href ="index_coupon.php"><img src="coupon.png" alt="">&nbsp;<span>code</span></a>  </li>
            <li><a href ="index_pub.php"><img src="settings.png" alt="">&nbsp;<span>publicité</span></a>  </li>
            <li><a href ="index.php"><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></a> </li>
            <li><a href ="index.php"><img src="settings.png" alt="">&nbsp;<span>Settings</span></a>  </li>
        </ul>
    </div> 
    

</body>
</html>


<?php 
include '../controller/couponC.php';
include '../models/coupon.php';


$couponC=new couponC();
$s=0;  
if(isset($_POST['id'])&&
  isset($_POST['date_deb'])&&
isset($_POST['date_experation'])&&
 isset($_POST['taux_reduction']) && 
isset($_POST['code_coupon'])&&
isset($_POST['etat'])


)
{
    $coupon=new coupon($_POST['id'],$_POST['date_deb'],$_POST['date_experation'],$_POST['taux_reduction'],$_POST['code_coupon'],$_POST['etat']);
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
.container{
  max-width: 700px;
  width: 100%;
  background:#fff;
  padding:25px 30px;
  border-radius:5px;
}
.container form .user-details{

  display:flex;
  flex-wrap:wrap;
  justify-content:space-between;

}
.container form .input-box 
{
  margin:20px  0 12px 0;
  width:calc(100 % / 2 - 20px);

}
.container form .input-box  .details
{
  display:block;
font-weigth:500;
margin-bottom:5px;
}
.container form .input-box input {

  height:45px;
  width:100%;
  outline:none;
  border-radius:5px;
  border:1px solid #ccc;
  padding-left:15px;
  font-size:20px;
}
form .button   {
  height:4px;
  margin:45px 0 ;

}
form .user-details .input-box{


  margin:20px  0 12px 0;
  width:100 %;
}


    </style>
<!-- 
<button><a href="index_cupon.php">Retour à la liste</a></button> -->
<script>
        function validateForm() {
            var letters = /^[A-Za-z]+$/;
            var dateNow = new Date();
            
            var n = document.getElementById("code_coupon").value;
            var p = document.getElementById("taux_reduction").value;
            
            if (n == "") {
                alert("le code coupon est vide !!");
                return false;
            }
            else if (!(n.match(letters) )) {
               alert("Veuillez entrer un code coupon valid!");
               return false ;
               }
               
           
               else if ((isNaN(p)==true)|| (p<20)||(p>50))
{ 
  alert("le champ de saisi doit être numériques");



  
return false;
        
    }
   

    
        
    }
    </script>
    
  

  
 <pre>
   <style>
     body{
  display: flex;
  height: 100vh;
  justify-content: center;
  align-self: center;
  padding: 10px;
  background: linear-gradient(100deg,#71b7e6,#9b59b6);

}
     </style>
   <div class="container">
   <form action="#" method="POST">
     <div class="user-details">
 <div class ="input-box">
<span class="id">ID</span>
<input type="number" id="id:" name="id" > 
  </div>
  <div class ="input-box">
<span class="date_deb">date debut</span>
<input type="date"  id="date_deb:" name="date_deb" > 
</div>
<div class ="input-box">
<span class="date_experation">date experation</span>
<input type="date"  id="date_experation" name="date_experation">
</div>
<div class ="input-box">
<span class="taux_reduction">taux reduction</span>
<input type="number" id="taux_reduction"   name="taux_reduction" >
</div>
<div class ="input-box">
<span class="code_coupon">code coupon</span>
<input type="text"class="form-control"  id="code_coupon" placeholder="entrer votre code coupon" name="code_coupon" ><br><br><br> <a href="index2.php" class="btn">GENERATE </a>
</div>
<div class ="input-box">
<span class="etat">etat</span>
<input type="number" id="etat"   name="etat">
			</div>  <div class="button">
         <input  type="submit" class="btn btn-primary"  name="submit" Onclick="return validateForm()" value="valider" >


</div>
        </form>
     
        </div>
       


        <?php if($s==1)
        
        
{
  

echo "<script>
alert('Vous avez ajouter un coupon');
</script>";
        echo "<script> window.location.href='index_coupon.php'
        </script>";
       
        $couponC->ajouter($coupon); 
}?>  


</body>
</html> 