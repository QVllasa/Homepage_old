<?php


$to = "qendrimvllasa@hotmail.de";
$subject = "Willkommen";


$headers [] = "From: " . $email;
$headers [] = "Reply-To: ";
$headers [] = "Return-Path: ";
$headers [] = "CC: ";
$headers [] = "BCC: ";




$text =

  '
';

if(mail($to, $subject, $text, implode("\r\n", $headers))){
  echo "Email versendet!";
}



