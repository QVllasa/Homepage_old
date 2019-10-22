<?php
$mailtext = '<html>
<head>
    <title>HTML-E-Mail mit PHP erstellen</title>
</head>
 
<body>
 
<h1>HTML-E-Mail mit PHP erstellen</h1>
 
<p>Diese E-Mail wurde mit PHP und HTML erstellt</p>
 
<table border="1">
  <tr>
    <td>Beschreibung</td>
    <td>Anzahl Seiten</td>
  </tr>
  <tr>
    <td>PHP lernen mit PHP-Kurs.com</td>
    <td>über 100</td>
  </tr>
</table>
 
<p>Die meisten HTML-Tags wie <b>fett</b>
und <i>kursiv</i> stehen zur
Verfügung</p>
 
</body>
</html>
';

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
