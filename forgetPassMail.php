<?php
if(isset($_POST['send'])){
	$Email=$_POST["email"];
	$conn = new mysqli('localhost', 'root', '', 'WebProject');
    if($conn->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
	$sql="SELECT * FROM users where email='$Email'";
	$result= $conn->query($sql);
	$arrayResult=mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	if($count >=1){
	$username=$arrayResult['username'];
	$password=$arrayResult['password'];
	$hash = md5( rand(0,1000));
	$to=$Email;
	$subject='Forgot Password'; // Give the email a subject 
	$message = '
	Hi,
	Your User Name and Password are:
	------------------------
	Username: '.$username.'
	Password: '.$password.'
	------------------------
	 
	Please click this link to continue.
	http://localhost/dusports/signLog.php?hash='.$hash.'
	
	Thanks,
	DUSPORTS
	dusports17@gmail.com
	';                   
	$headers = 'From:arifulamindu@gmail.com' . "\r\n"; 
	$mail_sent=mail($to, $subject, $message, $headers);
	if($mail_sent)
	{
		echo "<script type='text/javascript'>alert('Please Check mail for Username and Password');</script>";
		header('location:signLog.php');
	}else{
		//echo "<script type='text/javascript'>alert('Mail Failed!!');</script>";
		echo "<script>
			alert('Mail Failed!!');
			window.location.href='signLog.php';
			</script>";
	}
	}else{
		echo "<script>
			alert('Account could not found !!');
			window.location.href='signLog.php';
			</script>";
	}
	header("location:signLog.php");
}else{
	header("location:signLog.php");
}

?>