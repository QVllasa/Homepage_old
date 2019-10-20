<?php

$dbname = "qendrimvllasa";
$user = "qendrimvllasa";
$password = "Dominim123_!";
$dbhost = "localhost";


try{
  $conn = new PDO("mysql:host{$dbhost}; dbname={$dbname}", $user, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO messages (name, email, subject, text)
    VALUES ('John', 'sfsfsdfsd@example.com', 'nachricht', 'hier kommt die nachricht' )";

  $conn->exec($sql);
  echo "New record created successfully";

  $name = "Max";
  $email = "max@gmail.com";
  $subject = "Nachricht!";
  $text = "Das ist hier die ganze Nachricht!";



  $stmt->bindParam(":name", $name, PDO::PARAM_STR);
  $stmt->bindParam(":email", $email, PDO::PARAM_STR);
  $stmt->bindParam(":subject", $subject, PDO::PARAM_STR);
  $stmt->bindParam(":text", $text, PDO::PARAM_STR);

  $stmt->execute();

}
catch(PDOException $e){
  //die("Konnte keine Verbindung mit Datenbank aufbauen!");
  echo $stmt . "<br>" . $e->getMessage();
}

echo "Verbindung hergestellt";

?>
