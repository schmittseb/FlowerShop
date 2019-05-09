<?php
include 'database.php';
$query = "CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` char(50) NOT NULL,
  `password` char(50) NOT NULL,
   PRIMARY KEY (`userID`)
);";
  mysqli_query($connect, $query);
?>