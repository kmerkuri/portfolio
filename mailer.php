<?php


use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();

$mail->SMTPDebug = 2;


$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->CharSet = "UTF-8";
$mail->SMTPKeepAlive = true;

$mail->Username = 'klevimerkuri123@gmail.com';

$mail->Password = 'merkurinet';

$mail->setFrom('klevimerkuri123@gmail.com', 'Your Name');


$mail->addAddress('klevi_merkuri@yahoo.com', 'Receiver Name');

$mail->Subject = 'Testing PHPMailer';



$mail->Body = 'Hello, this is my message.';


if (!$mail->send()) {

    echo 'Mailer Error: ' . $mail->ErrorInfo;

} else {

    echo 'The email message was sent.';

}




?>