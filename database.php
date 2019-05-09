<?php

$server= '';
$username= '';
$password= '';
$database = '';

$connect = mysqli_connect($server, $username, $password, $database);
// Check connection
if (mysqli_connect_errno())  {
   die('Could not connect: ' . mysqli_connect_error());
}
?>