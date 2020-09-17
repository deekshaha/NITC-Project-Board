<?php

 $username = "root";
 $password = "";
 $servername = "localhost";
$db = 'project';

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
