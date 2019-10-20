<?php

//require ("inc/db.inc.php");
require ("inc/functions.inc.php");

print_r($_POST);

$servername = "localhost";
$username = "qendrimvllasa";
$password = "Dominim123_!";
$dbname = "qendrimvllasa";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO messages (name, email, subject, text)
    VALUES ('John', 'sfs123fsdfsd@example.com', 'nachricht', 'hier kommt die nachricht' )";

  $conn->exec($sql);
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


?>



<?php require ("parts/contact.php");?>
