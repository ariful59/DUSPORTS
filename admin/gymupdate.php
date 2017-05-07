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
    $hash1 =substr(md5(uniqid(rand(1,6))), 0, 8);
    $conn->query("INSERT INTO registration1(email,reg) VALUES('".$email."','".$hash1."')");

    require('fpdf.php');
    $sql1="SELECT * FROM gym where email='$email'";
    $result1= $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $username=$row1['name'];
    $dept=$row1['subject'];
    $present=$row1['present_address'];
    $pdf=new FPDF();
    $pdf->AddPage();
    $image2='logodu.png';
    $pdf->SetY(70);
    $pdf->SetFont('Times','B',16);
    $pdf->Cell(0,10,'Name:- '.$username,0,0,'C');
    $pdf->SetY(78);
    $pdf->Cell(0,10,'Department:- '.$dept,0,0,'C');
    $pdf->SetY(86);
    $pdf->Cell(0,10,'Present Address:- '.$present,0,0,'C');
    $pdf->SetY(94);
    $pdf->Cell(0,10,'Registration No:- '.$hash1,0,0,'C');
    $pdf->SetY(102);
    $pdf->Cell(0,10,'Email:- '.$email,0,0,'C');
    $pdf->Cell( 40, 40, $pdf->Image($image2, 89, 22, 33.78), 0, 0, 'L', false );
    //$pdf->Cell( 0, 10, $pdf->Image($image1, 89, 100, 33.78), 0, 0, 'L', false );
    $pdf->SetLineWidth(1.5);
    $pdf->Line(20, 12, 210-20, 12);
    $pdf->Line(20, 140, 210-20, 140);
    $pdf->Line(20, 12, 20, 140);
    $pdf->Line(210-20, 12, 210-20, 140);
    $pdf->Line(20, 12, 20, 140);
    $path='save_pdf/'.$hash1.'.pdf';
    $pdf->output($path,'F');
    $path='save_pdf/'.$hash1.'.pdf';
    sendVerificationBySwift($email,$FirstName,$hash1,$path);
    header("location:home");
}

function sendVerificationBySwift($email,$name,$id,$path)
{
    require_once 'lib/swift_required.php';

    $subject = 'DUSPORTS GYMNASIUM ADMISSION COMFIRMATION'; // Give the email a subject
    //$subject='DUSPORTS Signup | Verification'; // Give the email a subject
    $body = '
Hi '.$name .',
Welcome to DU GYMNASIUM! We are excited to have you on DU GYMNASIUM.

To learn about the schdule and update please keep you eye on DUSPORTS.

Please Take a print out of this attachment to get the id card of gymnasium.

Thank You for being with us.
		
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
        ->setBody($body)
        ->attach(Swift_Attachment::fromPath($path)->setFilename('registration.pdf'));

    $result = $mailer->send($message);
}



?>