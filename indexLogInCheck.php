<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $username=$_SESSION['username'];
	$_SESSION['loggedin'] = true;
	$_SESSION['username'] = $username;
	$Email=$_SESSION['email'];
	$_SESSION['email'] = $Email;
	header('location:dusports');
} 
else {
  // echo "<script type='text/javascript'>alert('At first you have to register/login');</script>";
	//include("signLog.html");
	header('location:dusports');
}
?>