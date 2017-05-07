<?php
if(!isset($_SESSION))
{
    session_start();
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $email = $_SESSION['email'];
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    //$conn=mysqli_connect("localhost","root","","WebProject");
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    mysqli_query($conn,"UPDATE admin_swim SET active='1' WHERE email='".$email."' AND active='0'") or die(mysql_error());
    $sql="SELECT * FROM users where email='$email'";
    $result= $conn->query($sql);
    $row = $result->fetch_assoc() ;
    $FirstName=$row['username'];
    $hash1 = md5( rand(1000,10000));

    $in=0;
    $conn->query("INSERT INTO registration(email,reg,in) VALUES('".$email."','".$hash1."','".$in."')");
    require('fpdf.php');
    $sql1="SELECT * FROM hello where email='$email'";
    $result1= $conn->query($sql1);
    $row1 = $result1->fetch_assoc() ;
    $username=$row1['name'];
    $dept=$row1['subject'];
    $present=$row1['present_address'];
    $pdf=new FPDF();
    $pdf->AddPage();
    $image2='logodu.png';
    $pdf->SetY(70);
    $pdf->SetFont('Times','B',16);
    $pdf->Cell(0,10,'Name: '.$username,0,0,'C');
    $pdf->SetY(78);
    $pdf->Cell(0,10,'Department: '.$dept,0,0,'C');
    $pdf->SetY(86);
    $pdf->Cell(0,10,'Present Address:- '.$present,0,0,'C');
    $pdf->SetY(94);
    $pdf->Cell(0,10,'Registration No:- '.$hash1,0,0,'C');
    $pdf->SetY(102);
    $pdf->Cell(0,10,'Email:- '.$hash1,0,0,'C');
    $pdf->Cell( 40, 40, $pdf->Image($image2, 89, 22, 33.78), 0, 0, 'L', false );
    //$pdf->Cell( 0, 10, $pdf->Image($image1, 89, 100, 33.78), 0, 0, 'L', false );
    $pdf->SetLineWidth(1.5);
    $pdf->Line(20, 12, 210-20, 12);
    $pdf->Line(20, 140, 210-20, 140);
    $pdf->Line(20, 12, 20, 140);
    $pdf->Line(210-20, 12, 210-20, 140);
    $pdf->Line(20, 12, 20, 140);
    $path='save_pdf/'.$username.'.pdf';
    $pdf->output($path,'F');
    $path='save_pdf/'.$username.'.pdf';
    sendVerificationBySwift($email,$FirstName,$hash1,$path);
    header("location:home");

    sendVerificationBySwift($email,$FirstName,$hash1);
    header("location:home");
}

function sendVerificationBySwift($email,$name,$id)
{
    require_once 'lib/swift_required.php';

    $subject = 'DUSPORTS SWIMMING POOL ADMISSION COMFIRMATION'; // Give the email a subject
    //$subject='DUSPORTS Signup | Verification'; // Give the email a subject
    $body = '
Hi '.$name.',
Welcome to DU SWIMMING POOL! We are excited to have you on DU SWIMMING POOL TEAM.

To learn about the schdule and update please keep you eye on DUSPORTS.

Thank You for being with us.
		 
Please Take a print out of this attachment to get the id card of swimmingpool.
		
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





?>