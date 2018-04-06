<?php

session_start();
$conn = mysqli_connect("localhost","root","","foss");

if(isset($_POST['submit'])){

$username = $_POST['username'];

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO foss1 (username,password,email) VALUES ('$username','$password','$email') ";
}


?>












<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>THE BEAUTY OF KADALUNDI</title>
<link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="loginBox">
    	<img src="../img/user.png" class="user">
    	  <h1>SIGN UP</h1>
    	  <form action="signup1.php" method="POST">
    	  	<p> Username</p>
    	  	<input type="text" name="username" placeholder="Enter Username">
    	  	<p>Password</p>
    	  	<input type="password" name="password" placeholder="Password">
    	  	<p> Email</p>
    	  	<input type="text" name="email" placeholder="Enter The Email">
    	  	
    	  	<input type="submit" name="submit" value="Create">
    	  	<a href="../login/loginpage.html">Already Have an Account</a><br>
    	  </form>
    </div>
</body>
</html>
