<?php
$servername = "localhost";
$username = "jbmolina";
$password = "4en3'PUa97R2?Bkw";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>