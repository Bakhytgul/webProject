<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
	<title>Main Page</title>
	<div class="nav-bar">
		<ul>
			<li><a class="active" href="#home">Home</a></li>
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
<link rel = "stylesheet" type = "text/css" href="index_main.css">
<body>
		
        <video autoplay loop muted class="bgvideo" id="bgvideo">
   			<source src="v_donor.mp4" type="video/mp4"></source>
  		</video>

<p id="demo2"></p>
 	<script>
	document.getElementById("demo2").innerHTML = Date();
	</script>

<div class="dropdown">
  <span>Tıme ıs</span>
  <div class="dropdown-content">
    <p id="demo1"></p>
  <script>
	var myVar = setInterval(myTimer, 1000);

	function myTimer() {
   	 	var d = new Date();
    	document.getElementById("demo1").innerHTML = d.toLocaleTimeString();
    
}
</script>

  </div>
</div>
    

</body>
</html>