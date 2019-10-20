<?php

$dbname = "qendrimvllasa";
$user = "qendrimvllasa";
$password = "Dominim123_!";
$dbhost = "localhost";

$pdo = new PDO("mysql:host{$dbhost}; dbname={$dbname}", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );

var_dump($pdo);
