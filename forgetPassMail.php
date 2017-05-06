<?php
if(isset($_POST['send'])){
	$Email=$_POST["email"];
	//$conn = new mysqli('localhost', 'root', '', 'WebProject');
	$conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    if($conn->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	$sql="SELECT * FROM users where email='$Email'";
	$result= $conn->query($sql);
	$arrayResult=mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	if($count >=1){
		$username=$arrayResult['username'];
		session_start(); 
	    $_SESSION['loggedin'] = true;
	    $_SESSION['username'] = $username;
	    $_SESSION['email'] = $Email;
		header('location:confirmpassword');
	}
	else{
		header('location:signLog');
	}
}
?>
