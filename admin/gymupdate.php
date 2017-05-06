<?php
if(!isset($_SESSION))
{
    session_start();
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $email = $_SESSION['email'];
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
     //$conn=mysqli_connect("localhost","root","","WebProject");
    mysqli_query($conn,"UPDATE admin_gym SET active='1' WHERE email='".$email."' AND active='0'") or die(mysql_error());
    $sql="SELECT * FROM users where email='$email'";
    $result= $conn->query($sql);
    $row = $result->fetch_assoc() ;
    $FirstName=$row['username'];
    $hash1 = md5( rand(1000,10000));
    sendVerificationBySwift($email,$FirstName,$hash1);
    header("location:home");
}

function sendVerificationBySwift($email,$name,$id)
{
    require_once 'lib/swift_required.php';

    $subject = 'DUSPORTS GYMNASIUM ADMISSION COMFIRMATION'; // Give the email a subject
    //$subject='DUSPORTS Signup | Verification'; // Give the email a subject
    $body = '
Hi '.$name .',
Welcome to DU GYMNASIUM! We are excited to have you on DU GYMNASIUM.

To learn about the schdule and update please keep you eye on DUSPORTS.

Thank You for being with us.
		 
To download your admission id card please check the link:
http://csedu.cf/dusports/gympdf?email='.$email.'&hash='.$id.'
		
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