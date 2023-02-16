<?php
  $servername = "192.168.150.213";
  $username = "webprogmi212";
  $password = "b3ntRhino98";
  $dbname = "webprogmi212";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Visitors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["fname"]. "<br>email: " . $row["email"]. "<br>website: " . $row["website"]. "<br>message:  " . $row["messages"]. "<br>gender: " . $row["gender"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>