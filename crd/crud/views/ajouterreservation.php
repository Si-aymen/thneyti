<?php 
include '../controller/reservationc.php';
include '../model/reservation.php';

$reservationc =new reservationc();
$s=0;  
if(isset($_POST['numabon'])&&
isset($_POST['nom'])&& isset($_POST['prenom']) && 
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

<form action="" method="POST">
 <div><pre>
<label for="nom">Numabon: <input type="text"  id="numabon:" name="numabon">    
<label for="nom">Nom: <input type="text"  id="n" name="nom">
<label for="prenom">Prenom: <input type="text" id="prenom"  name="prenom">
<label for="adresse">Adresse  <input type="text" id="adresse" name="adresse">
<label for="email">Email:  <input type="text" id="email" name="email">
<label for="dateinscription">Date inscription <input type="date" id="dateinscription" name="dateinscription" >
<input type="submit"   value="Ajouter">  <input type="button" value="Reset"> 

				<a href="afficherListeReservations.php">listadh</a>
			</div>    </pre>  

        </form>
        <?php if($s==1)
{
    $reservationc->ajouteradherent($reservation);
}?>  
</body>
</html> 