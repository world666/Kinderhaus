<?php
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
$errorMSG = "";

// NAME
if (empty($_POST["name"]))
{
    $errorMSG = "Name is required ";
}
else
{
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"]))
{
    $errorMSG .= "Email is required ";
}
else
{
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"]))
{
    $errorMSG .= "Message is required ";
} else
{
    $message = $_POST["message"];
}



$mail = new PHPMailer;
$mail->isSMTP(); // Tell PHPMailer to use SMTP
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

$mail->Host = 'smtp.gmail.com'; // Set the hostname of the mail server
$mail->Port = 587;
$mail->SMTPSecure = 'tls'; // Set the encryption system to use - ssl (deprecated) or tls

$mail->SMTPAuth = true; // Whether to use SMTP authentication
$mail->Username = "kyrylovdev@gmail.com";
$mail->Password = "andrey3828016";
$mail->setFrom($email, $name);
$mail->addAddress('annstepnyh@mail.ru', 'Hanna Stepnykh');
$mail->Subject = 'Neue Nachricht von ' . $email; //Set the subject line
$mail->Body = 'Name: ' . $name . PHP_EOL . "E-Mail: " . $email . PHP_EOL . $message;

if ($mail->send()) // send the message, check for errors
{
	echo "Ihre Nachricht wurde erfolgreich gesendet";
}
else
{
	echo "Beim senden der Nachricht ist ein Fehler aufgetreten"; //. $mail->ErrorInfo;
}
?>