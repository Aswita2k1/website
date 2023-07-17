<?php
$servername = "localhost:10006";
$username = "root";
$password = "root";
$database = "local";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}