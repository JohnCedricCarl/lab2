<?php
$servername = "localhost";
$username = "jbmolina";
$password = "4en3'PUa97R2?Bkw";
$dbname = "DBmi212";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Visitors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["fname"]. "email: " . $row["email"]. "website: " . $row["website"]. "message:  " . $row["messages"]. "gender: " . $row["gender"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>