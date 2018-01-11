<?php
session_start();
require 'users.php';
$username = $_POST['username'];
$password = $_POST['password'];

 
if($users[$username] == $password) {
	$_SESSION['username'] = $username;
	header('location: home.php');
}
else
	echo "Incorrect Login/Password";

?>
