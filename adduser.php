<?php 
session_start();
include 'connection.php';

if (isset($_POST['registr'])) {
	$username = $_POST['username'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$birth = $_POST['date'].$_POST['month'].$_POST['year'];
	$sex = $_POST['sex'];
	$status = $_POST['status'];
	$blood = $_POST['blood'];
	$rh = $_POST['rh'];
	$sql = "INSERT INTO users (name, login, password, contact, birth, sex, status, blood, rh) VALUES ( '".$username."', '".$login."', '".$password."','".$contact."','".$birth."','".$sex."','".$status."','".$blood."','".$rh."' )";
	if (mysqli_query($conn, $sql)) {
		$_SESSION['login'] = $login;
    	header('location: tologin.php');
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}else{
	header('location: tologin.php');
}
?>