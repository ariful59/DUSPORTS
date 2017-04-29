<?php

	session_start();
	if(isset($_POST['logInButton'])){
		$conn = new mysqli('localhost', 'root', '', 'WebProject');
		$Email=$_POST["Email"];
		//$Password=md5($_POST["Password"]);
		$Password=($_POST["Password"]);
		$active=1;
		$sql="SELECT * FROM users where email='$Email' and password='$Password' and active='$active'";
		$result= $conn->query($sql);
		$arrayResult=mysqli_fetch_array($result);
		$count = mysqli_num_rows($result);
		
		if($count>=1){
			
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $arrayResult['username'];
			$_SESSION['email']=$Email;
			header('location: .');
		}
		else{
			echo "<script>
			alert('Login Failed! Please make sure that you enter the correct details and that you have activated your account.');
			window.location.href='signLog.php';
			</script>";
			}
	  }
?>