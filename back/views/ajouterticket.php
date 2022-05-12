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
        <ul>            <li><a href="dashboard.php"><img src="dashboard (2).png" alt="">&nbsp; <span> Dashboard</span> </a></li>
            <li><a href="offre.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </a> </li>
            <li><a href="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span>  </a></li>
            <li><a href="indexreclamation.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span>  </a></li>
            <li><a href="indexrep.php"><img src="school.png" alt="">&nbsp;<span>Réponses</span>  </a></li>
            <li><a href="indexcat.php"><img src="school.png" alt="">&nbsp;<span>Catégories</span>  </a></li>
            <li><a href="reservation_index.php"><img src="payment.png" alt="">&nbsp;<span>reservation</span>  </a></li>
            <li><a href="forum.php"><img src="info.png" alt="">&nbsp;<span>forum</span>  </a></li>
            <li><a href ="index_coupon.php"><img src="coupon.png" alt="">&nbsp;<span>code</span></a> </li>
            <li><a href ="index_pub.php"><img src="settings.png" alt="">&nbsp;<span>publicite</span></a> </li>       
            <li><a href="indexticket.php"><img src="settings.png" alt="">&nbsp;<span>Commande</span> </a> </li>
        </ul>
    </div>


</body>
</html>


<?php
include '../controller/ticketC.php';
include '../model/ticket.php';

$ticketC=new ticketC();
$s=0;
if(isset($_POST['quantite'])&&
isset($_POST['prix'])
)

{
    $ticket=new ticket(
    $_POST['quantite'],
    $_POST['prix'],

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

<button><a href="index.php">Retour à la liste</a></button>


<form action="" method="POST">
 <div><pre>

<label for="quantite">quantite: <input type="number"  id="quantite:" name="quantite" >
<label for="prix"> prix: <input type="number"  id="prix" name="prix">


			</div>    </pre>
<button    type="submit" class="btn btn-primary" name="submit" >Ajouter </button>

        </form>
        <?php if($s==1)
{
$ticketC->ajouter($ticket);
echo "<script>alert('Vous avez ajouter un ticket');</script>";
        echo "<script> window.location.href='indexticket.php'</script>";
}?>
</body>
</html>
