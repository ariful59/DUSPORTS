<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $username=$_SESSION['username'];
	$_SESSION['loggedin'] = true;
	$_SESSION['username'] = $username;
	$Email=$_SESSION['email'];
	$_SESSION['email'] = $Email;
	if(empty($Email))
    {
        echo "<script>
			alert('Something Error.');
			window.location.href='signLog';
			</script>";
    }
    else {
        //echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
        //include("admissiongymMain.php");
        header("location:admissiongym");
    }
} 
else {
   //echo '<div class="statusmsg"><center><h1>Please log in first to see contents of this page.</h1></center></div>';
		echo "<script>
			alert('At first you have to register/login.');
			window.location.href='signLog';
			</script>";
}
?>