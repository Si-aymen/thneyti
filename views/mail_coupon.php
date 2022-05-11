<?php
include "../config.php";
require_once "../controller/ReclamationC.php";
require_once "../controller/reponseC.php";
require_once "../controller/couponC.php";

if (isset($_GET['cin']))
{
	$ReclamationC=new ReclamationC();
    $result=$ReclamationC->recupererReclamation($_GET['cin']);
	foreach($result as $row){
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$cin=$row['cin'];
		$email=$row['email'];
		$province=$row['province'];
		$sexe=$row['sexe'];
		$commentaire=$row['commentaire'];}
    
    
    $reponseC=new reponseC();
    $result=$reponseC->recupererReponse($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$reponse=$row['reponse'];
		$coupon=$row['coupon'];}


}




$sql="SELECT * from  coupon where code_coupon='$coupon'";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }

	foreach($liste as $row){
		$id=$row['id'];
		$date_deb=$row['date_deb'];
		$date_experation=$row['date_experation'];
		$taux_reduction=$row['taux_reduction'];
		$code_coupon=$row['code_coupon'];
		$et=$row['etat'];}



$couponC=new couponC();
$new_etat=1;
$coupon1=new coupon($id,$date_deb,$date_experation,$taux_reduction,$code_coupon,$new_etat);
  $couponC->modifier($coupon1,$id);




//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "azer72015@gmail.com";
//Set gmail password
	$mail->Password = "Tahermszn4";
//Email subject
	$mail->Subject = "Thneyti";
//Set sender email
	$mail->setFrom('azer72015@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	$mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = "<h1>Réponse du réclamation</h1></br><p>Voici votre code coupon : $coupon </p>";
//Add recipient
	$mail->addAddress($email);
//Finally send email
	if ( $mail->send() ) {
		header('Location: indexrep.php');
	}else{
		echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
	}
//Closing smtp connection
	$mail->smtpClose();
