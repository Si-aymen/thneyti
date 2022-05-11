<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
  <title>THNEYTI</title>
</head>
<style>
  .button-1 {
background-color: #610B4B;
border-radius: 8px;
border-style: none;
box-sizing: border-box;
color: #FFFFFF;
cursor: pointer;
display: inline-block;
font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
font-size: 14px;
font-weight: 500;
height: 40px;
line-height: 20px;
list-style: none;
margin: 0;
outline: none;
padding: 10px 16px;
position: relative;
text-align: center;
text-decoration: none;
transition: color 100ms;
vertical-align: baseline;
user-select: none;
-webkit-user-select: none;
touch-action: manipulation;
}
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
.button-1:hover,
.button-1:focus {
background-color: #000000;
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


<?php 
include '../controller/userC.php';
include '../model/user.php';

$userC=new userC();
$s=0;  
if(isset($_POST['id'])&&
  isset($_POST['nom'])&&
isset($_POST['prenom'])&&
isset($_POST['date_de_naissance'])&&
isset($_POST['email'])&&
isset($_POST['mot_de_passe'])&&
isset($_POST['adresse'])&&
isset($_POST['sexe'])&&
isset($_POST['permis'])&&
isset($_POST['tel'])
)

{
    $user=new user( 
      $_POST['id'],
    $_POST['nom'],
    $_POST['prenom'],
    $_POST['date_de_naissance'],
    $_POST['email'],
    $_POST['mot_de_passe'],
    $_POST['adresse'],
    $_POST['sexe'],
    $_POST['permis'],
    $_POST['tel']
  );
 $s=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THNEYTI</title>
 <!-- Bootstrap CSS -->
 
</head>
<body>

<button><a >Retour à la liste</a></button>


<form action="" method="POST">
 <div><pre>
 <label for="id">id: <input type="number"  id="id" name="id" >    
<label for="nom">Nom: <input type="text"  id="nom" name="nom" >    
<label for="prenom"> Prenom: <input type="text"  id="prenom" name="prenom">
<label for="date_de_naissance">date de naissance: <input type="date" id="date_de_naissance"   name="date_de_naissance">
<label for="email"> email:  <input type="text" id="email"  name="email" >
<label for="mot_de_passe">mot de passe: <input type="password"  id="mot_de_passe:" name="mot_de_passe" >    
<label for="adresse">adresse: <input type="text"  id="adresse" name="adresse">
<label for="sexe">sexe : <input type="text" id="sexe"   name="sexe">
<label for="permis">permis:  <input type="text" id="permis"  name="permis" >
<label for="tel"> bank id:  <input type="number" id="tel" name="tel" >

				
			</div>    </pre> 
<button    type="submit" class="btn btn-primary" name="submit" >Submit </button> 

        </form>
        <?php if($s==1)
{
$userC->ajouter($user);
echo "<script>alert('Vous avez ajouter un user');</script>";
        echo "<script> window.location.href='index.php'</script>";
}?>  
</body>
</html> 