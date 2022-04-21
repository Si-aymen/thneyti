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
include '../controller/pubC.php';
include '../model/pub.php';

$pubC=new pubC();
$s=0;  
if(isset($_POST['id_publication'])&&
  isset($_POST['photo'])&&
isset($_POST['date_debut'])&& 
isset($_POST['date_fin'])

)


{
    $pub=new pub($_POST['id_publication'],$_POST['photo'],$_POST['date_debut'],$_POST['date_fin']);
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

<button><a href="index_pub.php">Retour à la liste</a></button>


<form action="" method="POST">
 <div><pre>
 <label for="id_publication">id_publication : <input type="number"  id="id_publication:" name="id_publication" > 
<label for="photo">photo : <input type="file"  id="photo:" name="photo" >    
<label for="date_debut">date debut: <input type="date"  id="date_debut" name="date_debut">
<label for="date_fin">date fin: <input type="date" id="date_fin"   name="date_fin">

				
			</div>    </pre> 
<button    type="submit" class="btn btn-primary" name="submit" >Submit </button> 

        </form>
        <?php if($s==1)
{
$pubC->ajouter($pub);
echo "<script>
alert('Vous avez ajouter un publicite');</script>";
        echo "<script> window.location.href='index_pub.php'
        </script>";
}?>  
</body>
</html> 