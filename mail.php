<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $subject = $_POST["subject"];

    $msg ='<!DOCTYPE html>
    <html lang="en"> 
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p> Good Day! <strong> '. $name.'! </strong></p>
        <p>Thank you for your feedback!</p>
        <br>
        To get a better sleep, Buy a new bedsheet!<br>
        <strong></b>SheetsCristine</strong>

    </body>
    </html>';


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "infantado1010@gmail.com";
    $mail->Password = "yeemxlrdmlgppope";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";

    $mail->setFrom("infantado1010@gmail.com","SheetsCristine");
    $mail->addAddress($email);
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $msg;

    $mail->send();
    header('location:index.html');
}
?>
