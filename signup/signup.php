











<?php

session_start();
$conn = mysqli_connect("localhost","root","","foss");
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!$conn){
	
 die('could not connect :' . mysqli_error());
	
}
else
{


$sql = "INSERT INTO foss1 ( username, password, email ) VALUES ('$username', '$password', '$email') ";
	
}
if(mysqli_query($conn, $sql))
{
	echo("values are inserted");
}
else{
	echo("error");
	
}
header("refresh:2; url=signup.html");
mysqli_close($conn);

?>

