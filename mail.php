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
	$mail->Username = "customersupport@bigboyautowash.tech";
//Set gmail password
	$mail->Password = "Abc@1234";
//Email subject
	$mail->Subject = "Customer Concern: $subject";
//Set sender email
	$mail->setFrom('customersupport@bigboyautowash.tech','Support Team');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	// $mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = $message;
//Add recipient
	$mail->addAddress('customersupport@bigboyautowash.tech');
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
$mail->setFrom('customersupport@bigboyautowash.tech','Support Team');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	 $mail->addAttachment('img/logo.jpg');
//Email body
	$mail->Body ="<h1>Dear $name,</h1>
    <p>Thank you for choosing BigBoy Autowash for your recent car washing and detailing service. We hope that you were satisfied with the level of service provided by our team. We take pride in delivering high-quality services and are committed to ensuring that our customers have a positive experience with us.</p>
    <p>We would appreciate it if you could take a few moments to provide us with your feedback on your recent visit. Your feedback will help us to identify areas where we can improve and make necessary changes to our services. Your input is valuable to us, and we take your feedback seriously.</p>
    <p>Please feel free to share your feedback by replying to this email, or by visiting our website and leaving a review. We would be happy to hear from you.</p>
    <p>Thank you for your time and support. We look forward to serving you again soon.</p>
    <p>Best regards,<br>BigBoy Garage Autowash Team</p>
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
  
	header("Location:index.html");
	exit();
//Closing smtp connection
	$mail->smtpClose();