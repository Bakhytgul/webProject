<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Donor</title>
  <style>
    html{
      height: 100%;
      width:  100%;
      background: url(shine.jpg) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
    }
    </style>

  <style type="text/css">
  input{height: 25px; border-radius: 5px; padding: 5px; outline: none; }
  input[type=submit]{line-height: 5px;}
  form{text-align: center; margin-top: 100px;}
  </style>

  <script>
  function validateForm() {
    var x = document.forms["myForm"]["username"].value;   
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    var y = document.forms["myForm"]["login"].value;
    if (y == null || y == "") {
        alert("Login must be filled out");
        return false;
    }
    var x = document.forms["myForm"]["password"].value;
    if (x == null || x == "") {
        alert("Password must be filled out");
        return false;
    }
    var a = document.forms["myForm"]["contact"].value;
    if (a == null || a == "") {
        alert("Contact must be filled out");
        return false;
    }
    var b = document.forms["myForm"]["sex"].value;
    if (b == null || b == 0) {
        alert("Sex must be filled out");
        return false;
    }
    var c = document.forms["myForm"]["status"].value;
    if (c == null || c == 0) {
        alert("Status must be filled out");
        return false;
    }
    var d = document.forms["myForm"]["blood"].value;
    if (d == null || d == 0) {
        alert("Blood group must be filled out");
        return false;
    }
    var e = document.forms["myForm"]["rh"].value;
    if (e == null || e == 0) {
        alert("Rhesus factor must be filled out");
        return false;
    }
  }
  </script>

  </head>
<link rel="stylesheet" type="text/css" href="welcome.css"/>
<body>
  <div class="nav-bar">
    <ul>
      <li><a class="active" href="index_main.php">Home</a></li>
      <li><a class="active" href="information.php">Information</a></li>
      <li><a class="active" href="welcome.php">Registration</a></li>
      <!--<li><a class="active" href="#">For Donor</a></li>
      <li><a class="active" href="#">For Retsepient</a></li>-->
      <li><a class="active" href="retseption.php">Retsepients</a></li>
      <li style="float:right"><a class="active" href="tologin.php">Log In</a></li>
    
    </ul>
  </div>


<form name="myForm" action="adduser.php" enctype="multipart/form-data" method="post" onsubmit="return validateForm()">
    <input type="text" name="username" placeholder="Your Name" ><br>
    <br>
    <input type="text" name="login" placeholder="Your Nickname" ><br>
    <br>
    <input type="password" name="password" class = "username" placeholder="Create Password"><br>
    <br>
    <input type="text" name="contact" class = "username" placeholder="Your Telephone"><br>
    <br>

    Date of birth: <select name="date" class="spisok">
          <?php
          for ($i=1; $i<=31; $i++){
            echo "<option>$i</option>";
          }
          ?>
       </select>

    <select name="month" class="spisok">
      <?php
          for ($i=1; $i<=12; $i++){
            echo "<option>$i</option>";
          }
          ?>
       </select>

    <select name="year" class="spisok">
    <?php
          for ($i=1960; $i<=1998; $i++){
            echo "<option>$i</option>";
          }
          ?>
       </select>
    <br><br>

    Sex: <select name="sex" class="spisok">
    <option value="0">- Choose -</option>
    <option value="men"> Men </option>
    <option value="women"> Woman </option></select>
    <br><br>

    Status: <select name="status" class="spisok">
    <option value="0">- Choose -</option>
    <option value="donor"> Donor </option>
    <option value="retseption"> Retsepient </option></select>
    <br><br>

    Blood: <select name="blood" class="spisok">
    <option value="0">- Group -</option>
    <option value="I[0]"> I [0] </option>
    <option value="II[A]"> II [A]</option>
    <option value="III[B]"> III [B]</option>
    <option value="IV[AB]"> IV [AB]</option></select>
    <br><br>

    Rhesus: <select name="rh" class="spisok">
    <option value="0">- Choose -</option>
    <option value="+"> + [positive]</option>
    <option value="-"> - [negative]</option></select>
    <br><br>


    <input type="submit" name="registr" value="Registration">
</form>

</body>
</html>
