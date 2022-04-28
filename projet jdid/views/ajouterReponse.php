<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponse</title>
</head>
<body>
    <hl>Formulaire de réponse</hl>
    <br><br>
    <form method="post">
        <fieldset>
            <legend>Ajouter une réponse</legend>


            <br><label>CIN</label>
            <input type="text" name="cin" id="cin" autocomplete="off">

            <br><br>
            
            <br><label>Réponse</label><br>
            <textarea rows="10" cols="50" id="reponse" name="reponse"></textarea><br>

            <br><br>

            <label>Coupon</label>
            <input type="text" name="coupon" id="coupon" autocomplete="off">
            
            <br><br>

            <br><button type="submit" class="btn btn-primary" name="submit" Onclick="return validateForm()">Submit</button><br>


           
            </fieldset>
        </form>
        <?PHP
include "../controller/reponseC.php";

if (isset($_POST['cin']) and isset($_POST['reponse']) and isset($_POST['coupon']))
{

    $rep=new reponse($_POST['cin'],$_POST['reponse'],$_POST['coupon']);
    $reponseC=new reponseC();
    $reponseC->ajouter($rep);



header('Location: indexrep.php');
	
}
else
{
	
}
//*/

?>

        <br><br>
        <a href="indexrep.php" target="_parent">Retour vers la page d'accueil</a>

        <script>
        function validateForm() {
            var letters = /^[A-Za-z]+$/;
            var n = document.getElementById("nom").value;
            var p = document.getElementById("prenom").value;
            var pr = document.getElementById("province").value;

            if (n == "") {
                alert("le nom est vide !!");
                return false;
            }
            else if (!(n.match(letters) )) {
               alert("Veuillez entrer un nom valid!");
               return false ;
               }
        else if (p == "") {
                alert("le prenom est vide !!");
                return false;
               }
            else if (!(p.match(letters) )) {
        alert("le prenom est invalide !");
        return false ;
        } 
        
        if ( pr == "") {
                alert("la province est vide !!");
                return false;
            }
            else if (!(pr.match(letters) )) {
               alert("Veuillez entrer une province valide!");
               return false ;
               }

               if (email.value.indexOf("@")==-1)
    {
        alert("le champ doit contenir @");
        return false;
    }
    else if (email.value.indexOf(".")==-1)
    {
        alert("le champ doit contenir .");
        return false;
    }

    </body>
</html>