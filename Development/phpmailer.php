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


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
  $mail->isSMTP();                                            // Send using SMTP
  $mail->Host = 'smtp1.example.com';                    // Set the SMTP server to send through
  $mail->SMTPAuth = true;                                   // Enable SMTP authentication
  $mail->Username = 'user@example.com';                     // SMTP username
  $mail->Password = 'secret';                               // SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  //Recipients
  $mail->setFrom('from@example.com', 'Mailer');
  $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
  $mail->addAddress('ellen@example.com');               // Name is optional
  $mail->addReplyTo('info@example.com', 'Information');
  $mail->addCC('cc@example.com');
  $mail->addBCC('bcc@example.com');

  // Attachments
  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

  // Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Here is the subject';
  $mail->Body = 'This is the HTML message body <b>in bold!</b>';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->send();
  echo 'Message has been sent';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
