<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	html{
		height: 100%;
		width:  100%;
		background: url(03.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
	}
	</style>

	<script>
	function validateForm() {
    var x = document.forms["myForm"]["login"].value;   
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    var y = document.forms["myForm"]["password"].value;
    if (y == null || y == "") {
        alert("Password must be filled out");
        return false;
    }
	}
	</script>

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
	<style type="text/css">
	input{height: 25px; border-radius: 5px; padding: 5px; outline: none;}
	input[type=submit]{line-height: 5px;}
	form{text-align: center; margin-top: 200px;}
	</style>
</head>
<link rel = "stylesheet" type = "text/css" href="index_main.css">



<body>

	<?php

$conn=mysqli_connect('localhost', 'root', '', 'fil') or die ("Unable to connect");
if (isset($_POST['submit'])) {
  $login = $_POST['login'];
  $password = $_POST['password'];
  $sql = "SELECT * from users where login=\"$login\" AND password=\"$password\" ";
  $res = mysqli_query($conn, $sql);
 if (mysqli_num_rows($res)>0) {
    $_SESSION['login'] = $login;
    $dan=mysqli_fetch_assoc($res);
    $_SESSION['id']=$dan['id'];
    $_SESSION['name']=$dan['name'];
    $_SESSION['login']=$dan['login'];
    $_SESSION['contact']=$dan['contact'];
    $_SESSION['birth']=$dan['birth'];
    $_SESSION['sex']=$dan['sex'];
    $_SESSION['status']=$dan['status'];
    $_SESSION['blood']=$dan['blood'];
    $_SESSION['rh']=$dan['rh'];

    if($_SESSION['id']==1){
    	header("Location:polz.php");
    }
    

    echo '<p style="color:#fff; text-align:center">You are welcome, '.$dan['name'].'!</p>';
  }
  else{
    echo '<p style="color:red">INCORRECT</p>';}}
    ?>
 

  <?php
  if(isset($_SESSION['login'])){
  echo '
  <form method="post" action="tologin.php"><input type="submit" name="out" value="Out"></form>';
  if(isset($_POST['out'])){
  unset($_SESSION['login']);
  unset($_SESSION['name']);
  unset($_SESSION['password']);
  session_destroy();
}
}

else {echo'
	<form name="myForm" action="tologin.php" enctype="multipart/form-data" method="post" onsubmit="return validateForm()">
		<p><em><strong>Welcome, Please!<strong><em></p>
		<input type="text" name="login" placeholder="My Login"><br><br>
		<input type="password" name="password" placeholder="My Password"><br><br>
		<input type="submit" name="submit" value="Login" >	
	<br><br>
	<a href="welcome.php">Sign Up</a>
	</form>';}
	?>


</body>
</html> 