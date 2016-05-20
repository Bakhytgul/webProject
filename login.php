<?php 
session_start();
include 'connection.php';
if (isset($_POST['submit'])) {
	$login = $_POST['login'];
	$password = $_POST['password'];
	$sql = "SELECT * from users where login=\"$login\" AND password=\"$password\" ";
	$res = mysqli_query($conn, $sql);
	if (mysqli_num_rows($res)>0) {
		$_SESSION['login'] = $login;
		//header('location:index_main.php');
		// echo "Welcome";
	}
	else{
		header('location:tologin.php');}
}

?>