<?php
	$hash = md5( rand(0,1000));
	$to=$Email;
	$subject='Payment Confirmation for Gymnasium'; // Give the email a subject 
	$message = '
	Hi,
	Congrats. 
	You have completed the admission form of Gymnasium.!!
	------------------------
	Your are approve of the payment for Gymnasium. After finishing payment
	on the nearby bank of Dhaka University.please click the link and submit
	the scanned copy of our payment.
	Payment Ammount and details are found in the website.
	------------------------
	 
	Please click this link to complete your admission:
	http://localhost/dusports/confirmgym.php?hash='.$hash.'
	
	Thanks,
	DUSPORTS
	dusports17@gmail.com
	';                   
	$headers = 'From:arifulamindu@gmail.com' . "\r\n";
	$mail_sent=mail($to, $subject, $message, $headers); 
	if($mail_sent)
	{
		echo "<script type='text/javascript'>alert('Please Check mail for details.');</script>";
		header('location:index.php');
	}else{
		echo "<script type='text/javascript'>alert('Mail Failed!!');</script>";
		header('location:index.php');
	}
	//header("location:confirm.php");
	
	
?>