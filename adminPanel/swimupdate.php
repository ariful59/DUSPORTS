<?php
if(!isset($_SESSION))
{
    session_start();
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $email = $_SESSION['email'];
   // $conn=mysqli_connect("localhost","root","","WebProject");
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    mysqli_query($conn,"UPDATE admin_swim SET active='1' WHERE email='".$email."' AND active='0'") or die(mysql_error());
    $sql="SELECT * FROM users where email='$Email'";
    $result= $conn->query($sql);
    $row = $result->fetch_assoc() ;
    $FirstName=$row['username'];
    $hash1 = md5( rand(1000,10000));
    sendVerificationBySwift($email,$FirstName,$hash1);
}

function sendVerificationBySwift($email,$name,$id)
{
    require_once 'lib/swift_required.php';

    $subject = 'DUSPORTS SWIMMING POOL ADMISSION COMFIRMATION'; // Give the email a subject
    //$subject='DUSPORTS Signup | Verification'; // Give the email a subject
    $body = "
Hi $name,
Welcome to DU SWIMMING POOL! We are excited to have you on DU SWIMMING POOL TEAM.

To learn about the schdule and update please keep you eye on DUSPORTS.

Thank You for being with us.
		 
To download your admission id card please check the link:
http://csedu.cf/dusports/swimpdf?email='.$email.'&hash='.$id.'
		
Thanks,
DUSPORTS

For any queries email us,
dusports17@gmail.com";

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





?>