<?php
$servername = "localhost";
$database = "laundry";
$user = "root";
$password = "";

// Create connection
$db = new mysqli($servername, $user, $password, $database);

// Check connection

if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";
// echo "<br><br>"
?>