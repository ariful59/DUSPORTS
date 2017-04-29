<?php
session_start();
session_destroy();
//echo "<script type='text/javascript'>alert('You have been logged out');</script> ";			
//echo '<h2><center>You have been logged out. <a href="index.php">Go back</a></center></h2>';
//header('location:index.php');
echo "<script>
			alert('You have been logged out.');
			window.location.href='index.php';
			</script>";
?>