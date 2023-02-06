<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBmi212";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE TABLE Visitors (
  fname VARCHAR(255) NOT NULL PRIMARY KEY,
  email VARCHAR(50) NULL,
  website VARCHAR(255) NULL,
  messages VARCHAR(255) NULL,
  gender VARCHAR(10) NULL
  )";

  $conn->exec($sql);
  echo "Table Visitors created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>