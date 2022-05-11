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
        
        <li><a href="index.php"><img src="dashboard (2).png" alt="">&nbsp; <span> Dashboard</span> </a></li>
            <li><a href="index.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </a> </li>
            <li><a href="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span>  </a></li>
            <li><a href="index.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span>  </a></li>
            <li><a href="reservation_index.php"><img src="payment.png" alt="">&nbsp;<span>reservation</span>  </a></li>
            <li><a href ="index_coupon.php"><img src="coupon.png" alt="">&nbsp;<span>code</span></a> </li>
            <li><a href ="index_pub.php"><img src="settings.png" alt="">&nbsp;<span>publicite</span></a> </li>
            <li><a href="index.php"><img src="help-web-button.png" alt="">&nbsp; <span>Help</span> </a></li>
            <li><a href="index.php"><img src="settings.png" alt="">&nbsp;<span>Settings</span> </a> </li>
        </ul>
    </div>


</body>
</html>

<script type="text/javascript" src="pub.js"></script>
<?php 
include '../controller/pubC.php';
include '../model/pub.php';
$pubC=new pubC();
$s=0;  
if(isset($_POST['idd'])&&
  isset($_POST['photo'])&&
isset($_POST['date_debut'])&& 
isset($_POST['date_fin'])&&
isset($_POST['description'])
)


{
    $pub=new pub($_POST['idd'],$_POST['photo'],$_POST['date_debut'],$_POST['date_fin'],$_POST['description']);
 $s=1;
 $pubC->ajouter($pub);
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

<button><a href="index_pub.php">Retour à la liste</a></button>

<script>
        function validateForm() {
            var letters = /^[A-Za-z]+$/;
            var dateNow = new Date();
            var n = document.getElementById("code_coupon").value;
           

            if (n == "") {
                alert("le code coupon est vide !!");
                return false;
            }
            else if (!(n.match(letters) )) {
               alert("Veuillez entrer un code coupon valid!");
               return false ;
               }
         
           

        
    }
    </script>
     
                        
<form action="" method="POST">
 <div><pre>
 <label for="idd">ID: <input type="number"  id="idd:" name="idd" > 
<label for="photo">photo : <input type="file"  id="photo:" name="photo" >    
<label for="date_debut">date debut: <input type="date"  id="date_debut" name="date_debut">
<label for="date_fin">date fin: <input type="date" id="date_fin"   name="date_fin">

<label for="description"> description: <input type="text" id="description"   name="description">				
			</div>    </pre> 
<button    type="submit" class="btn btn-primary" name="submit" onclick=" return verifier()" >Submit </button> 

        </form>
        <?php if($s==1)
{

echo "<script>
alert('Vous avez ajouter un publicite');</script>";
        echo "<script> window.location.href='index_pub.php'
        </script>";
}?>  
</body>
</html> 