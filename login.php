<?php
session_start();
include('database.php');
/*include 'database.php';*/
if (isset($_POST['login'])){
	/*$email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);*/
  
   	$email = $_POST['email'];
	  $password = $_POST['password'];
  
    if(	!empty($email) && 
		!empty($password)){
        /*$password = md5($password);*/
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($connect, $query);
        if (mysqli_num_rows($results) > 0) {
          $_SESSION['e'] = $email;
          header('location: succesful-login.php');
          exit;
        }else {
        	header('location: unsuccesful-login.php');
             /*header('location: index.php');*/
        }
    }
  }


?>