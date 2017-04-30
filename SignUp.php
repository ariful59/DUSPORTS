<?php

	if(isset($_POST['SignUp'])){
    $FirstName=$_POST["FirstName"];
	$LastName=$_POST["LastName"];
	$Email=$_POST["Email"];
    $Password=($_POST["password"]);

	$hash = md5( rand(0,1000));
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    if($conn->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
	$sql="SELECT * FROM users where email='$Email'";
	$result= $conn->query($sql);
	$count = mysqli_num_rows($result);
	if($count <1){
		
		$conn->query("INSERT INTO users(username,email,password, hash) VALUES('".$FirstName."','".$Email."','".$Password."','".$hash."')");
		sendVerificationBySwift($FirstName,$Password,$hash);
		
		/*$to=$Email;
		$subject='Signup | Verification'; // Give the email a subject 
		$message = '
		Hi,
		Thanks for signing up!
		
		Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
		 
		------------------------
		Username: '.$FirstName.'
		Password: '.$Password.'
		------------------------
		 
		Please click this link to activate your account:
		http://csedu.cf/dusports/dusports/verify.php?email='.$Email.'&hash='.$hash.'
		
		Thanks,
		DUSPORTS
		dusports17@gmail.com
		';                   
		$headers = 'From:arifulamindu@gmail.com' . "\r\n"; // Set from headers
		$mail_sent=mail($to, $subject, $message, $headers); // Send our email
		//echo $mail_sent ? "Mail Sent" : "Mail Failed";
		if($mail_sent)
		{
			echo "<script type='text/javascript'>alert('please verify it by clicking the activation link that has been send to your email.');</script>";
			//include("signLog.php");
			//header('location:signLog.php');
			echo "<script>
				alert('please verify it by clicking the activation link that has been send to your email.');
				window.location.href='signLog.php';
				</script>";
		}else{
			//echo "<script type='text/javascript'>alert('Mail Failed!!');</script>";
			//include("signLog.php");
			//header('location:signLog.php');
			echo "<script>
				alert('Mail Failed!!');
				window.location.href='signLog.php';
				</script>";
		}*/
	}
	else{
		//echo "<script type='text/javascript'>alert('You already registered.');</script>";
		//include("signLog.php");
		echo "<script>
			alert('You already registered.');
			window.location.href='signLog.php';
			</script>";
	}
	}else{
		//include("signLog.php");
		header('location:signLog.php');
	}
		
		
		
	function sendVerificationBySwift($email,$name,$id)
	{
		require_once 'lib/swift_required.php';

		$subject = 'DUSPORTS Signup | Verification'; // Give the email a subject
		$address="http://csedu.cf/dusports/lalbus/verify?email=".$Email."&hash=".$id;
		$subject='DUSPORTS Signup | Verification'; // Give the email a subject 
		$body = '
		Hi,
		Thanks for signing up!
		
		Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
		 
		------------------------
		Username: '.$FirstName.'
		Password: '.$Password.'
		------------------------
		 
		Please click this link to activate your account:
		http://csedu.cf/dusports/dusports/verify.php?email='.$Email.'&hash='.$hash.'
		
		Thanks,
		DUSPORTS
		dusports17@gmail.com
		'; 
		'.$address;

			$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
				->setUsername('dusports17@gmail.com')
				->setPassword('dusports17')
				->setEncryption('ssl');

			$mailer = Swift_Mailer::newInstance($transport);

			$message = Swift_Message::newInstance($subject)
				->setFrom(array('noreply@dusports.com' => 'DUSPORTS'))
				->setTo(array($Email))
				->setBody($body);

			$result = $mailer->send($message);
	}
?>