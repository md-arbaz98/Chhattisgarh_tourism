<?php


$firstName = $_POST['firstName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];


$conn = new mysqli("localhost", "id17002635_arbaz", "Abz@12345678", "id17002635_malak");
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
  } else{
  $stmt = $conn->prepare("insert into signup(firstName, email, phone, password)
          values($firstName, $email, $phone, $password)");
  $stmt->bind_param("ssis",$firstName, $email, $phone, $password);
  $stmt->execute();
  echo "Registered successfully....";
  $stmt->close();
  $conn->close();
}
?>
