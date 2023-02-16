<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="formvalidation.css">
</head>
<body>  
<div class="navbar">
    <ul>
        <li><a href="index.php#about">ABOUT</a></li>
        <li><a href="index.php#contact">CONTACT</a></li>
        <li><a href="index.php#resources">RESOURCES</a></li>
        <li><a href="formvalidation.php">FORMS</a></li>
        <li><button type="button"
          onclick="document.getElementById('demo').innerHTML = Date()">
          What time is it?</button>
          
          <p id="demo"></p></li>
      </ul>
  </div>
<br><br><br><br><br><br><br><br><br><br><br>
<?php

$name = $email = $gender = $messages = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $messages = test_input($_POST["messages"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Who u?</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Message: <textarea name="message" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $messages;
echo "<br>";
echo $gender;
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  $servername = "192.168.150.213";
  $username = "webprogmi212";
  $password = "b3ntRhino98";
  $dbname = "webprogmi212";
	

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO Visitors (fname ,email, website, messages, gender)
	VALUES ('$name', '$email', '$website', '$messages', '$gender')";
	
	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
}	

?>

</body>
</html>