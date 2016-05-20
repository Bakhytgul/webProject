<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
	<title>Info Page 1</title>
	<style>
	html{
		height: 100%;
		width:  100%;
		background: url(20.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
	}
	</style>
</head>
<link rel = "stylesheet" type = "text/css" href="index_main.css">
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
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
	<div style="color: white; padding:20px; Times New Roman;">
		<header><h1 align="center"><b> Кто может стать донором? </b></h1></header>
		<pre><em><h2>Донором может стать любой здоровый человек в возрасте от 18 до 60 лет.
Каждый человек может дать свою кровь на своем предприятии, в учреждении или 
придя в республиканский центр крови.
В организме взрослого человека 5-6 л крови, что соответствует 1/13 или 7-8% массы тела.
Многочисленными исследованиями и наблюдениями врачи доказали, что взятие 400-450 мл 
крови или 500 мл плазмы не влияет на организм здорового человека и его трудоспособность.
Усиливается обмен веществ, улучшается настроение, цвет кожи лица, идет разгрузка печени, 
организм омолаживается.
Поэтому врачи считают совершенно безвредным, сдавать кровь до 5 раз в год с интервалом 
между кроводачами в 2 месяца.
Существует ряд противопоказаний для донорства. 

Донором нельзя быть тем, кто болел или болен:
1. гепатитом;
2. бруцеллезом;
3. сифилисом;
4. у кого имеется порок сердца, бронхиальная астма, 
наркопотребителям, ВИЧ инфицированным, страдающим
хроническим алкоголизмом.

Существуют следующие категории доноров:
1. доноры крови;
2. доноры плазмы, в т.ч. иммунные;
3. доноры клеток крови (тромбоцитов, лейкоцитов);
4. доноры с определенной антигенной структурой эритроцитов и 
лейкоцитов, кровь, которая используется для диагностических целей;
5. аутодоноры - сдающие кровь или ее компоненты для себя пред 
предстоящей плановой операцией</h2></em>
</pre></header>
	</div>
</div>
<div class="col-sm-2"></div>
</body>
</html>