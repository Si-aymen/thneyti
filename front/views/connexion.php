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
           header('Location:../index.php');} //??? pourquoi?
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
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <style>

body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #521945, #0f0c29, #24243e);
}
.main{
	width: 350px;
	height: 500px;
	background: #521945;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #521945;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
.btnSubmit{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #912F56;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
.btnSubmit:hover{
	background: #912F56;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #521945;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}



    </style>
<script>
    </script>
    
</head>
<body>
    
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="ajouter.php">
					<label for="chk" aria-hidden="true">S'inscrire</label>
					
					<input type="submit" name="submit" value="S'inscrire" class="btnSubmit">
				</form>
			</div>

			<div class="login">
            <form name="frmUser" method="post" action="">
            <div class="message">
      <?php if($message!="") { echo $message; } ?>
    </div>
					<label for="chk" aria-hidden="true">Se connecter</label>
					<input type="email" name="email" placeholder="Email" required="" class="login-input">
					<input type="password" name="mot_de_passe" placeholder="Mot de passe" required="" class="login-input">
					<input type="submit" name="submit" value="Se connecter" class="btnSubmit">
				</form>
			</div>
	</div>


</body>
</html>