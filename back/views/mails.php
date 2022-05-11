<?php

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
	$mail->Body = "<h1>Reclamation</h1></br><p>Votre Réclamation est reçue, nous vous contactons bientot. merci</p>";
//Add recipient
	$mail->addAddress("rahali.aymen2001@gmail.com");
//Finally send email
	if ( $mail->send() ) {
		echo "mail sent";
	}else{
	//	echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
	}
//Closing smtp connection
	$mail->smtpClose();