<?php

if (isset($_POST['remove-account'])){
	session_start();
	include 'database.php';
	$email = '';  
	$password = '';
	$password_new = '';	
	// check if POST is not empty
	if(	!empty($_POST['email']) && 
		!empty($_POST['password'])):
	

		$email = $_POST['email'];
		$password = $_POST['password'];
	endif;

	$query = "DELETE FROM `users` WHERE email='$email' and password='$password';";
	$result = mysqli_query($connect, $query);		
	session_destroy();
  	unset($_SESSION['e']);
  	header("location: account-deleted.php");
}



if (isset($_POST['change-password'])){
	include 'database.php';
	$email = '';  
	$password = '';
	$password_new = '';	
	// check if POST is not empty
	if(	!empty($_POST['email']) && 
		!empty($_POST['password']) &&
		!empty($_POST['password_new'])
	){

		$email = $_POST['email'];
		$password = $_POST['password'];
		$password_new = $_POST['password_new'];
	}
	$query = "UPDATE `users` SET `password` = '$password_new' WHERE email='$email' and password='$password';";
	$result = mysqli_query($connect, $query);
	session_destroy();
  	unset($_SESSION['e']);
  	header("location: password-changed.php");
}
?>