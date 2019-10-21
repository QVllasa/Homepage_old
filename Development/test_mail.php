<?php


$email="qendrim.vllasa@gmail.com";



$to = "qendrimvllasa@hotmail.de";
$headers = 'From:'.$email;

echo $headers;

$text="Versuch nummer 2";

mail($to, $subject, $text, $headers);
