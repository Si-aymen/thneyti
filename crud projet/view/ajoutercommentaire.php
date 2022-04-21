


<?php 
include '../controller/commentaireC.php';
include '../model/commentaire.php';

$commentaireC=new commentaireC();
$s=0;  
if(
isset($_POST['contenu'])&& isset($_POST['id_com'])&& 
isset($_POST['date_com'])

)


{
    $commentaire=new commentaire($_POST['id_com'],$_POST['contenu'],$_POST['date_com']);
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

<button><a href="com.php">Retour au commentaires</a></button>

<form action="" method="POST">
 <div><pre>
 
<label for="id_com">id_com : <input type="text"  id="id_com" name="id_com"> 
<label for="contenu">contenu : <input type="text"  id="contenu" name="contenu">
<label for="date_com">date_com :  <input type="date" id="date_com"  name="date_com" >


				
			</div>    </pre> 
<button    type="submit" class="btn btn-primary" name="submit" >Submit </button> 

        </form>
        <?php if($s==1)
{
$commentaireC->ajoutercommentaire($commentaire);
echo "<script>alert('Vous avez ajouter un commentaire');</script>";
        echo "<script> window.location.href='com.php'</script>";
}?>  
</body>
</html> 