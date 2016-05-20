<?php
	session_start();
	$connect = mysqli_connect('localhost', 'root','', 'fil') or die(mysql_error());
	if(isset($_GET['del1'])){
		$pol_id = $_GET['del1'];
		$y = "DELETE from users WHERE id=$pol_id";
		$dqh = mysqli_query($connect, $y);
		header("Location:polz.php");
		
	}
?>