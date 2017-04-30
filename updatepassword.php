<?php
	if(!isset($_SESSION)) 
	{ 	
	session_start(); 
	} 
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		$username=$_SESSION['username'];
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $username;
		$Email=$_SESSION['email'];
		$_SESSION['email'] = $Email;
		$conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
		if(isset($_POST['SignUp'])){
		$password=$_POST["pass1"];
		$search = mysqli_query($conn,"SELECT email FROM users WHERE email='".$email."'") or die(mysql_error()); 
		$match  = mysqli_num_rows($search);        
		if($match > 0){
			$cost = 10;
			$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
			$salt = sprintf("$2a$%02d$", $cost) . $salt;
			$hash = crypt($pass, $salt);
			mysqli_query($conn,"UPDATE users SET password=". $hash . " WHERE email='".$Email."'") or die(mysql_error());
			header('location:dusports');
		}else
		{
			echo "<script>
				alert('Failed to update.');
				window.location.href='signLog';
				</script>";
		}
	}

						
?>