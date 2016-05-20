<?php
	session_start();
	$connect = mysqli_connect('localhost', 'root','', 'fil') or die(mysql_error());
	$r = "SELECT * FROM users ";
	$query = mysqli_query($connect, $r);
	while($polz = mysqli_fetch_assoc($query)){
		
		echo'
		<div style="background:url(10.jpg)">
			<div style="padding:5px;"><a style="text-decoration:none; color:#CC0033; font-family: Courier;" href="del_pol.php?del1='.$polz['id'].'"><b>DELETE</b></a></p>
			</div>
			<p style="color:#fff">ID: '.$polz['id'].'</p>
			<p style="color:#fff">Name: '.$polz['name'].'</p>
			<p style="color:#fff">Contact number: '.$polz['contact'].'</p>
			<p style="color:#fff">Date Birthday: '.$polz['birth'].'</p>
			<p style="color:#fff">Blood group: '.$polz['blood'].' '.$polz['rh'].'</p>
			<hr />
		</div>
		';
		
	}
	
?>
<?php 
if(isset($_SESSION['login'])){
  echo '
  <form method="post" action="tologin.php"><input type="submit" name="out"value="Out"></form>';
  if(isset($_POST['out'])){
  unset($_SESSION['login']);
  unset($_SESSION['name']);
  unset($_SESSION['password']);
  session_destroy();
}}?>	
	
	