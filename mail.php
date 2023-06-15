<?php
$name=$_POST['name'];
$email=$_POST['email'];   
$subject=$_POST['subject']; 
$message=$_POST['message'];

//Include required PHPMailer files
	require 'phpmailer/includes/PHPMailer.php';
	require 'phpmailer/includes/SMTP.php';
	require 'phpmailer/includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.hostinger.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "Jminfantado123@gmail.com";
//Set gmail password
	$mail->Password = "nkdgsslikemqazjs";
//Email subject
	$mail->Subject = "Customer: $subject";
//Set sender email
	$mail->setFrom('Jminfantado123@gmail.com','Admin');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	// $mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = $message;
//Add recipient
	$mail->addAddress('Jminfantado123@gmail.com');
//Finally send email
if ($mail->send()) {
	//Email has been sent
	echo '<script>alert("Email has been sent!");</script>';
  } else {
	//Email sending failed
	echo '<script>alert("Email sending failed.");</script>';
  }
  
$mail->clearAllRecipients();
  
//Set sender email
$mail->setFrom('Jminfantado123@gmail.com','Admin');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	 $mail->addAttachment('images/SheetsCristine.png');
//Email body
	$mail->Body ="<h1>Dear $name,</h1>
   
";
//Add recipient
	$mail->addAddress($email);
//Finally send email
if ($mail->send()) {
	//Email has been sent
	echo '<script>alert("Email has been sent!");</script>';
  } else {
	//Email sending failed
	echo '<script>alert("Email sending failed.");</script>';
  }
  
	header("Location:index.php");
	exit();
//Closing smtp connection
	$mail->smtpClose();