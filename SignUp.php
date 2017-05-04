<?php

	if(isset($_POST['SignUp'])){
    $FirstName=$_POST["FirstName"];
	$LastName=$_POST["LastName"];
	$Email=$_POST["Email"];
    $pass=$_POST["password"];

	/*$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
	$salt = sprintf("$2a$%02d$", $cost) . $salt;
    $Password = crypt($pass, $salt);
	echo $Password;*/
	$cost = 10;
	$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
	$salt = sprintf("$2a$%02d$", $cost) . $salt;
	$hash = crypt($pass, $salt);
	$hash1 = md5( rand(1000,10000));
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    //$conn = new mysqli('localhost', 'root', '', 'WebProject');
	
    if($conn->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
	$sql="SELECT * FROM users where email='$Email'";
	$result= $conn->query($sql);
	$count = mysqli_num_rows($result);
		if($count <1){
			
			$conn->query("INSERT INTO users(username,email,password, hash) VALUES('".$FirstName."','".$Email."','".$hash."','".$hash1."')");
			sendVerificationBySwift($Email,$FirstName,$hash1);
			echo "<script>
				alert('Please Check Your mail for confirmation message');
				window.location.href='signLog';
				</script>";
		}
		else{
			echo "<script>
				alert('You already registered.');
				window.location.href='signLog';
				</script>";
		}
	}else{
		header('location:signLog');
	}	
	function sendVerificationBySwift($email,$name,$id)
	{
		require_once 'lib/swift_required.php';

		$subject = 'DUSPORTS SIGNUP | VERIFICATION'; // Give the email a subject
		//$subject='DUSPORTS Signup | Verification'; // Give the email a subject
		$body = '
Hi,
Welcome to DUSPORTS! We are excited to have you on DUSPORTS.
 
Thanks for signing up!
		
Your account has been created, you can login with the following email after you have activated your account by clicking the url below.
		 
------------------------
Email : '.$email.'
Username: '.$name.'
------------------------
		 
Please click this link to activate your account:
http://csedu.cf/dusports/mail_verify?email='.$email.'&hash='.$id.'
		
Thanks,
DUSPORTS

For any queries email us,
dusports17@gmail.com'; 
		
			$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
				->setUsername('dusports17@gmail.com')
				->setPassword('dusports17')
				->setEncryption('ssl');

			$mailer = Swift_Mailer::newInstance($transport);

			$message = Swift_Message::newInstance($subject)
				->setFrom(array('noreply@dusports.com' => 'DUSPORTS'))
				->setTo(array($email))
				->setBody($body);

			$result = $mailer->send($message);
	}
?>