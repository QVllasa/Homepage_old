<?php
$servername = "localhost";
$username = "qendrimvllasa";
$password = "Dominim123_!";
$dbname = "qendrimvllasa";



try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO `messages` (`name`, `email`, `phone`, `subject`, `text`) 
    VALUES (:name, :email, :phone, :subject, :text)");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':phone', $phone);
  $stmt->bindParam(':subject', $subject);
  $stmt->bindParam(':text', $text);


  // insert a row
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone=$_POST['phone'];
  $subject=$_POST['subject'];
  $text=$_POST['message'];



  $stmt->execute();


  echo "New records created successfully";
}
catch(PDOException $e)
{
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>

<?php// require ("parts/contact.php");?>

