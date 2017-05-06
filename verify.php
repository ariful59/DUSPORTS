<?php
         
    //$conn = new mysqli('localhost', 'root', '', 'WebProject');
	$conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
	if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
		$email = mysqli_real_escape_string($conn,$_GET['email']); // Set email variable
		$hash = mysqli_real_escape_string($conn,$_GET['hash']); // Set hash variable
                 
		$search = mysqli_query($conn,"SELECT email, hash, active FROM users WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
		$match  = mysqli_num_rows($search);
                 
		if($match > 0){
        mysqli_query($conn,"UPDATE users SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error());
        echo "<script type='text/javascript'>alert('Your account has been activated, you can now login.');</script>";
		//include("signLog.html");
		header('location:signLog');
		}else{
			 echo "<script type='text/javascript'>alert('The url is either invalid or you already have activated your account.');</script>";
			//include("signLog.html");
			header('location:signLog');
		}
	}
             
?>