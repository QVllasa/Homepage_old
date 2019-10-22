<?php
$mailtext = '';

$empfaenger = "qendrimvllasa@hotmail.de"; //Mailadresse
$absender   = "qendrim.vllasa@gmail.com";
$betreff    = "Mail-Test - HTML-E-Mail mit PHP erstellen";
$antwortan  = "qendrim.vllasa@gmail.com";

$header  = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=utf-8\r\n";

$header .= "From: $absender\r\n";
$header .= "Reply-To: $antwortan\r\n";
// $header .= "Cc: $cc\r\n";  // falls an CC gesendet werden soll
$header .= "X-Mailer: PHP ". phpversion();

mail( $empfaenger,
  $betreff,
  $mailtext,
  $header);

echo "Mail wurde gesendet!";
?>
