<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $username=$_SESSION['username'];
	$_SESSION['loggedin'] = true;
	$_SESSION['username'] = $username;
	$Email=$_SESSION['email'];
	$_SESSION['email'] = $Email;
	//echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
	//include("admissionswimMain.php");
	header("location:admissionswim");
} 
else {
   //echo '<div class="statusmsg"><center><h1>Please log in first to see contents of this page.</h1></center></div>';
		echo "<script>
			alert('At first you have to register/login.');
			window.location.href='signLog';
			</script>";
}
?>