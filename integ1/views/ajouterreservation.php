

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>THNEYTI Admin Panel</title>
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

<?php 
include '../controller/reservationc.php';
include '../model/reservation.php';

$reservationc =new reservationc();
$s=0;  
if(isset($_POST['numabon'])&&
isset($_POST['nom'])&&
 isset($_POST['prenom']) && 
isset($_POST['adresse'])&&
isset($_POST['email'])&&
isset($_POST['dateinscription']))
{
    $reservation=new reservation($_POST['numabon'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['adresse'], $_POST['dateinscription']);
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
</head>
<body>
<centre>
<form action="" method="POST" id="ajouter_resrevation">
 <div><pre>
<label  for="numabon">Numabon: <input type="text"  id="numabon" name="numabon">    
<label for="nom">Nom: <input type="text"  id="n" name="nom">
<label for="prenom">Prenom: <input type="text" id="prenom"  name="prenom">
<label for="adresse">Adresse  <input type="text" id="adresse" name="adresse">
<label for="email">Email:  <input type="text" id="email" name="email">
<label for="dateinscription">Date inscription <input type="date" id="dateinscription" name="dateinscription" >
<input type="submit"   value="Ajouter"  class="btn">  <input type="button" value="Reset"  class="btn"> 
<p style="color: red;" id="erreur"></p>
				<a href="reservation_index.php">retour</a>
			</div>    </pre>  

        </form>


<script src="ajouterreservation.js"></script>
</centre>
        <?php if($s==1)
{
    $reservationc->ajouteradherent($reservation);
}?>  
</body>
</html> 