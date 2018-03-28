<?php
require_once('connection.php');
$name = $password = $email = $password = $pwd ='';

$name = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO foss (username,password,email) VALUES ('$name','$password','$email') ";

  
	

 
?>