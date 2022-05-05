
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>THNEYTI Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
        <ul>
            <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </li>
            <li><a href="indexcat.php" ><img src="school.png" alt="">&nbsp;<span>Catégories</span></a> </li>
            <li><a href="index.php" ><img src="school.png" alt="">&nbsp;<span>Reclamations</span></a> </li>
            <li><a href="indexrep.php" ><img src="school.png" alt="">&nbsp;<span>Réponses</span></a> </li>
            <li><img src="payment.png" alt="">&nbsp;<span>Income</span> </li>
            <li><img src=".png" alt="">&nbsp;<span>code</span> </li>
            <li><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>

    <div class="container">
    <hl>Formulaire de réclamation</hl>
    <br><br>
    <form method="post">
        <fieldset>
            <legend>Veuillez remplir le formulaire</legend>


            <br><label>Categorie de reclamation ? </label>
            <select name="nomcateg" id="nomcateg" autocomplete="off">
                <option value="tech">Technique</option>
                <option value="eco">Econnomique</option>
                <option value="Autre">Autre</option>

            </select><br>

            <br><br>

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
include "../controller/reponseC.php";
include "../controller/categorieC.php";

if (isset($_POST['nomcateg']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['cin']) and isset($_POST['email']) and isset($_POST['province'])and isset($_POST['sexe'])and isset($_POST['commentaire']))
{

$reclam=new reclamation($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['email'],$_POST['province'],$_POST['sexe'],$_POST['commentaire']);
$reclamC=new ReclamationC();
$reclamC->ajouter($reclam);

$rep=new reponse($_POST['cin'],'','');
$repC=new reponseC();
$repC->ajouter($rep);

$categorie=new categorie($_POST['nomcateg'],$_POST['commentaire'],$_POST['cin']);
$categorieC=new categorieC();
$categorieC->ajouter($categorie);

header('Location: index.php');
	
}
else
{
	
}
//*/

?>

        <br><br>
        <a href="index.php" target="_parent">Retour vers la page d'accueil</a>
    </div>
</body>

</html>