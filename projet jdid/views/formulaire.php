<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclamation</title>
</head>
<body>
    <hl>Formulaire de réclamation</hl>
    <br><br>
    <form method="post">
        <fieldset>
            <legend>Veuillez remplir le formulaire</legend>

            <label>Nom</label>
            <input type="text" name="nom" id="nom" autocomplete="off">

            <label>Prenom</label>
            <input type="text" name="prenom" id="prenom" autocomplete="off">

            <br><br>

            <br><label>CIN</label>
            <input type="text" name="cin" id="cin" autocomplete="off">

            <label>E-Mail</label>
            <input type="text" name="email" id="email" autocomplete="off">
            
            <br><br>
            
            <br><label>De quelle province étes-vous ?</label>
            <input type="text" name="province" id="province" autocomplete="off">

            <br><br>

            <br><label>Sexe ?</label>
            <select name="sexe" id="sexe" autocomplete="off">
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Autre">Autre</option>

            </select><br>

            <br><label>Commentaire</label><br>
            <textarea rows="10" cols="50" id="commentaire" name="commentaire"></textarea><br>

            <br><button type="submit" class="btn btn-primary" name="submit">Submit</button><br>
           
            </fieldset>
        </form>
        <?PHP
include "../controller/ReclamationC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['cin']) and isset($_POST['email']) and isset($_POST['province'])and isset($_POST['sexe'])and isset($_POST['commentaire']))
{
$reclam=new reclamation($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['email'],$_POST['province'],$_POST['sexe'],$_POST['commentaire']);

$reclamC=new ReclamationC();
$reclamC->ajouter($reclam);
header('Location: index.php');
	
}
else
{
	
}
//*/

?>

        <br><br>
        <a href="index.php" target="_parent">Retour vers la page d'accueil</a>
    </body>
</html>