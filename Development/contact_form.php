<?php

require ("inc/db.inc.php");
require ("inc/functions.inc.php");

echo "Hallo Welt";

$stmt =  $pdo -> prepare("INSERT INTO `messages` (`name`, `email`, `subject`, `text`)
VALUE(:name, :email, :subject, :text)");

$erstens = "Max";
$zweitens = "max@gmail.com";
$drittens = "Nachricht!";
$viertens = "Das ist hier die ganze Nachricht!";



$stmt -> bindParam(":name", $erstens, PDO::PARAM_STR);
$stmt -> bindParam(":email", $zweitens, PDO::PARAM_STR);
$stmt -> bindParam(":subject", $drittens, PDO::PARAM_STR);
$stmt -> bindParam(":text", $viertens, PDO::PARAM_STR);

$stmt -> exec();


echo "Hallo Welt2";
?>



<?php //require ("parts/contact.php");?>
