<?php

$servername = "localhost";
$username = "Mungiria";
$password = "Neymar01";
$database = "craftworks";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>