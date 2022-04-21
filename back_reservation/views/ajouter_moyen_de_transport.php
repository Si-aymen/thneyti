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
            <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </li>
            <li><img src="teacher2.png" alt="">&nbsp;<span>Clients</span> </li>
            <li><img src="school.png" alt="">&nbsp;<span>Reclamations</span> </li>
            <li><img src="payment.png" alt="">&nbsp;<span>Income</span> </li>
            <li><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>
    </body>

</html>

<?php 
include '../controller/moyen_de_transportc.php';
include '../model/moyen_de_transport.php';

$moyen_de_transportc =new moyen_de_transportc();
$s=0;  
if(isset($_POST['id_moy'])&&
isset($_POST['prix'])&& 
isset($_POST['disponibilite']) && 
isset($_POST['depart'])&&
isset($_POST['destination'])&&
isset($_POST['date_depart'])&&
isset($_POST['AR'])&&
isset($_POST['date_retour']))
{
    $moyen_de_transport=new moyen_de_transport($_POST['id_moy'],$_POST['prix'],$_POST['disponibilite'],$_POST['depart'],$_POST['destination'], $_POST['date_depart'],$_POST['AR'],$_POST['date_retour']);
 $s=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add new moyen de transport</title>
</head>
<body>
<centre>
<form action="" method="POST">
 <div><pre>
<label  for="nom">id_moy: <input type="text"  id="id_moy:" name="id_moy">    
<label for="prix">prix: <input type="text"  id="prix" name="prix">
<label for="disponibilite">disponibilite: <input type="text" id="disponibilite"  name="disponibilite">
<label for="depart">depart: <input type="text" id="depart" name="depart">
<label for="destination">destination <input type="text" id="destination" name="destination">
<label for="depart">Date depart <input type="date" id="date_depart" name="date_depart" >
<label for="AR">AR <input type="AR" id="AR" name="AR" >
<label for="date_retour">date_retour<input type="date" id="date_retour" name="date_retour" >
<input type="submit"   value="Ajouter"  class="btn">  <input type="button" value="Reset"  class="btn"> 

				<a href="index.php">retour</a>
			</div></pre>  

        </form>
</centre>
        <?php if($s==1)
{
    $moyen_de_transportc->ajouteradherent($moyen_de_transport);
}?>  
</body>
</html> 