<!DOCTYPE html>
<html lang="en">
<head>
<title>My Profile</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="navbar">
    <ul>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#resources">RESOURCES</a></li>
        <li><a href="formvalidation.php">FORMS</a></li>
        <li><button type="button"
          onclick="document.getElementById('demo').innerHTML = Date()">
          What time is it?</button>
          
          <p id="demo"></p></li>
      </ul>
  </div>

  <div id="about"class="about">
    <h1>I'm <span>Ced</span></h1>
    <p>I look forward to studying with you. I'm not good at anything in particular. I'll work hard to get along with everyone.</p>
    <img src="cedced.jpg">

  </div>
  <div id="contact" class="contact">
    <h1>Here are ways the you can contact me:</h1>
    <ul>
        <li><a href="https://facebook.com" target="_blank" class="facebook">facebook</a></li>
        <li><a href="https://twitter.com" target="_blank" class="twitter">twitter</a></li>
        <li><a href="https://instagram.com" target="_blank" class="instagram">instagram</a></li>
    </ul>
    <h1> or leave a message ^^.</h1>
    <form action="welcome.php" method="post">
      Name: <input type="text" name="name"><br>
      Message: <input type="text" name="message"><br>
      <input type="submit">
      </form>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <div id="resources"class="resources">
    <ul>
      <h1>Resources:</h1>
      <li><div class="img1"><a href="https://w3schools.com" target="_blank"><img src="w3logo.jpg"></a><p>w3schools.com</p></div></li>
      <li><div class="img2"><a href="https://codeacademy.com" target="_blank"><img src="codeacademylogo.jpg"></a><p>codeacademy.com</p></div></li>
    </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
  </body>
  <body>
  <div class="enter" style = "color: rgb(190, 225, 207);
  font-size: 50px; text-align: center; position: relative; bottom: 200px;"
    <h1 id="welcome"> Hello There,  </h1>  
    </div>
  </body>
  
  <script type = "text/javascript">
    var nickname = prompt("Please enter your name: ");
    if (nickname != null) {
      document.getElementById("welcome").innerText =
      "Hello There, " + nickname + " !";
    }
  </script> 