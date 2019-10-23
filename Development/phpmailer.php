<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '/composer.phar/vendor/autoload.php';

require_once ('PHPMailer/src/PHPMailer.php');

$mail = new PHPMailer();

$mail->isSMTP();
$mail->SMTPAuth();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'qendrim.vllasa@gmail.com';
$mail->Password = 'Dominim123.321';


$mail->SetFrom ('hello@qendrimvllasa.de');
$mail->Subject = 'Hello World';
$mail->Body = 'A test mail!';

$mail->AddAddress('qendrimvllasa@hotmail.de');

$mail->send();
