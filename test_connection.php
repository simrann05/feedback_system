<?php
$servername = "localhost";
$username = "root";
$password = "your_password_here"; // Replace this
$dbname = "feedback";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>