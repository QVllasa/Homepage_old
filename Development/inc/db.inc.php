<?php

$dbname = "qendrimvllasa";
$user = "qendrimvllasa";
$password = "Dominim123_!";
$dbhost = "127.0.0.1";


try{
  $pdo = new PDO("mysql:host{$dbhost}; dbname={$dbname}", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
}
catch(PDOException $e){
  die("Konnte keine Verbindung mit Datenbank aufbauen!");
}

echo "Verbindung hergestellt";
