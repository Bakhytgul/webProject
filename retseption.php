<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Baha</title>
  <style>
  html{
    height: 100%;
    width:  100%;
    background: url(22.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
  }
  </style>  
</head>
<link rel = "stylesheet" type = "text/css" href="retseption.css">
<div class="nav-bar">
    <ul>
      <li><a class="active" href="index_main.php">Home</a></li>
      <li><a class="active" href="information.php">Information</a></li>
      <li><a class="active" href="welcome.php">Registration</a></li>
      <!--<li><a class="active" href="#">For Donor</a></li>
      <li><a class="active" href="#">For Retsepient</a></li>-->
      <li><a class="active" href="retseption.php">Retsepients</a></li>
      <li style="float:right"><a class="active" href="tologin.php">Log In</a></li>
    <?php if(isset($_SESSION['login'])){
  echo '
  <form method="post" action="tologin.php"><input type="submit" name="out"value="Out"></form>';
  if(isset($_POST['out'])){
  unset($_SESSION['login']);
  unset($_SESSION['name']);
  unset($_SESSION['password']);
  session_destroy();
}}?>  
    </ul>

</div>
<body>
<div class="img">
  <a target="_blank" href="img_fjords.jpg">
    <img src="ill1.jpg" alt="Trolltunga Norway" width="300" height="200">
  </a>
  <div class="desc"><a href="heizel.php">Хейзел Грейс Ланкастер</a></div>
</div>

<div class="img">
  <a target="_blank" href="img_forest.jpg">
    <img src="ill2.png" alt="Forest" width="600" height="400">
  </a>
  <div class="desc"><a href="#">Огастус Уотерс</a></div>
</div>

<div class="img">
  <a target="_blank" href="img_lights.jpg">
    <img src="ill4.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc"><a href="#">Филипп</a></div>
</div>

<div class="img">
  <a target="_blank" href="img_mountains.jpg">
    <img src="ill6.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc"><a href="#">Джон Коффи</a></div>
</div>

 
</body>
</html>