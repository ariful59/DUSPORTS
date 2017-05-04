<?php
	$hash = md5( rand(1000,10000));
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			$email=$_SESSION['email'];
			$username=$_SESSION['username'];
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			sendVerificationBySwift($email,$username,$hash);
	}
	else{{
		echo "<script>
				alert('Something Error');
				window.location.href='admissiongym';
				</script>";
	}
	function sendVerificationBySwift($email,$name,$id)
	{
		require_once 'lib/swift_required.php';

		$subject = 'DUSPORTS Signup | Verification'; // Give the email a subject
		$subject='DUSPORTS Signup | Verification'; // Give the email a subject 
		$body = '
Hi' .$name; .'

Congrats, You have completed the form of Gymnasium for admission!
 
------------------------
Your are approve of the payment for Gymnasium. After finishing payment
on the nearby bank of Dhaka University.please click the link and submit
the scanned copy of our payment.
Payment Ammount and details are found in the website.
------------------------
		 
Please click this link to complete your admission:
http://csedu.cf/dusports/gymmail_confirm?email='.$email.'&hash='.$id.'
		
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