<?php
  session_start();
  include 'bd.php';
  $id = $_GET['var'];
  $var = "DELETE from user where id=$id";
  if (mysql_query($var)){
    header("Location:adminka.php");
  }

 ?>
