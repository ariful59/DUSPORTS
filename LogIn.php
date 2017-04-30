<?php

	session_start();
	if(isset($_POST['logInButton'])){
		//$conn = new mysqli('localhost', 'root', '', 'WebProject');
		$conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
		$Email=$_POST["Email"];
		$Password=($_POST["Password"]);
		$active=1;
		
		$sql="SELECT * FROM users where email='$Email' and active='$active'";
		$result= $conn->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$hash = $row['password'];
			if (hash_equals($hash, crypt($Password, $hash)) ) {
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $row['username'];
			$_SESSION['email']=$Email;
			header('location: .');
			}
			echo "<script>
			alert('Login Failed! Please make sure that you enter the correct password.');
			window.location.href='signLog';
			</script>";
		}
		else{
			echo "<script>
			alert('Login Failed! Please make sure that you enter the correct name');
			window.location.href='signLog';
			</script>";
		}
	  }
?>