


<?php 
include '../controller/posteC.php';
include '../model/poste.php';

$posteC=new posteC();
$s=0;  
if(isset($_POST['titre'])&&
isset($_POST['contenu'])&& isset($_POST['image']) && 
isset($_POST['date_de_pub'])

)
{
    $poste=new poste($_POST['id_poste'],$_POST['titre'],$_POST['contenu'],$_POST['image'],$_POST['date_de_pub']);
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
 
<label for="titre">titre: <input type="text"  id="titre:" name="titre" >    
<label for="contenu">contenu : <input type="text"  id="contenu" name="contenu">
<label for="image"> image: <input type="mediumblob" id="image"   name="image">
<label for="date_de_pub">date_de_pub :  <input type="date" id="date_de_pub"  name="date_de_pub" >


				
			</div>    </pre> 
<button    type="submit" class="btn btn-primary" name="submit" >Submit </button> 

        </form>
        <?php if($s==1)
{
$posteC->ajouter($poste);
echo "<script>alert('Vous avez ajouter un poste');</script>";
        echo "<script> window.location.href='index.php'</script>";
}?>  
<script>
        function validateForm() {
            var letters = /^[A-Za-z]+$/;
            var dateNow = new Date();
            var n = document.getElementById("id_poste").value;
            var p = document.getElementById("titre").value;
            var dp = document.getElementById("contenu").value;
            var db = document.getElementById("date_de_pub").value;
           

            if (n == "") {
                alert("l'id du poste est vide !!");
                return false;
            }
            else if (!(n.match(letters) )) {
        alert("Veuillez entrer un nom valid!");
        return false ;
        }
        else if (p == "") {
                alert("le titre est vide !!");
                return false;
            }
            else if (!(p.match(letters) )) {
        alert("le titre est invalide !");
        return false ;
        } else if (dp == "") {
                alert("le contenu est vide !!");
                return false;
            }
        else if (!(dp.match(letters) )) {
        alert("le contenu est invalide !");
        return false ;
        } 
        
        else if(new Date(dr).toLocaleString() < dateNow.toLocaleString()) {
        alert( " date_de_pub est inferieur  a date systeme  !");
        return false ;
        }
        else if ((new Date(dr).toLocaleString())<(new Date(dr).toLocaleString()))
        {
            alert ("la date_de_retour retour est inferieur a date debut  ") ; 
            return false ;
        }
        
    }
    </script>
</body>
</html> 