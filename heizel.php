<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
	<title>Main Page</title>
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
</head>
<link rel = "stylesheet" type = "text/css" href="heizel.css">
<body>

<h1> Hazel Grace Lancaster </h1>
<img src="ill_.jpg" width="320" height="290" alt="klematis">
<img src="ill1.jpg" width="320" height="290" alt="klematis">
<img src="ill_1.jpg" width="320" height="290" alt="klematis">
<img src="ill1_.jpg" width="320" height="290" alt="klematis">

<p><b>Age:</b> 18</p>
<p><b>Country:</b> USA</p>
<p><b>Illness:</b> Сancer</p>
<p><b>Need:</b> Money for Opetation</p>
<p><b>History:</b> Hazel Grace Lancaster is an intelligent and witty teenager living in Indianapolis, who has terminal thyroid cancer that has since spread to her lungs. Believing she is depressed, Hazel's mother Frannie urges her to attend a weekly cancer patient support group to help her make friends who are going through the same thing.
</p>
</body>
</html>