<?php

if (isset($_POST['remove-account'])):
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
		die('Your user account was deleted.');		
endif;
sleep (10);
include 'logout.php';
?>