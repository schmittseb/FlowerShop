<?php

include 'database.php';

if (isset($_POST['register'])){

  $email = '';  // Reset all variables
  $password = '';

  if(	!empty($_POST['email']) && 
    !empty($_POST['password'])){

    $email = $_POST['email'];
  $password = $_POST['password'];
}

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);
if ($num>0){
  header("location: already-registered.php");
  exit;
}

$query = "INSERT INTO users (email, password) VALUES('$email',
'$password')";

mysqli_query($connect, $query);
header("location: succesfully-registered.php");	

}



?>

