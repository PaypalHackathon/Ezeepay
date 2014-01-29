<?php
require_once("utilities.php");
$util=new utilities();
$conn=$util->connect_db();
$name=$_POST['name'];
$mail=$_POST['mail'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
if($util->isAlreadyRegistered($user)){
	echo"<script>alert('Username Already Taken!');history.back();</script>";
}
$final_pass=md5($pass."@ezeepay");
$uid=strrev($final_pass);
if($pass!=$repass){
	echo"<script>alert('Passwords doesnot match!');history.back();</script>";
}
else{
	$query="insert into master_user values('$name','$mail','$user','$final_pass','$uid')";
	$conn->query($query);
	session_start();
	$_SESSION['user']=$user;
	header("location:user.php");
}
?>