<?php
session_start();
include_once '../model/user.php';
include_once '../controller/userC.php';
$message="";
$userC = new userC();
if (isset($_POST["email"]) &&
    isset($_POST["mot_de_passe"])) {
    if (!empty($_POST["email"]) &&
        !empty($_POST["mot_de_passe"]))
    {   $message=$userC->connexionUser($_POST["email"],$_POST["mot_de_passe"]);
         $_SESSION['e'] = $_POST["email"];// on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur
        if($message!='pseudo ou le mot de passe est incorrect'){
           header('Location:ProfilUser.php');} //??? pourquoi?
        else{
            $message='pseudo ou le mot de passe est incorrect';
        }}
    else
        $message = "Missing information";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
<body>
<form name="frmUser" method="post" action="">
   <div class="message">
      <?php if($message!="") { echo $message; } ?>
    </div>
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
        <tr class="tableheader">
            <td align="center" colspan="2">Authentification</td>
        </tr>
        <tr class="tablerow">
            <td>
                <label for="email">Email:</label>
            </td>
            <td>
                <input type="text" name="email" placeholder="Email" class="login-input">
            </td>
        </tr>
        <tr class="tablerow">
            <td>
                <label for="mot_de_passe">Mot de passe:</label>
            </td>
            <td>
                <input type="mot_de_passe" name="mot_de_passe" placeholder="mot de passe" class="login-input"></td>
        </tr>
        <tr class="tableheader">
            <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
        </tr>
    </table>
</form>
</body>
</html>