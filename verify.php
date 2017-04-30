<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>DU SPORTS > Sign up</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
        <?php
         
    $conn = new mysqli('localhost', 'root', '', 'WebProject');
	if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
		$email = mysqli_real_escape_string($conn,$_GET['email']); // Set email variable
		$hash = mysqli_real_escape_string($conn,$_GET['hash']); // Set hash variable
                 
		$search = mysqli_query($conn,"SELECT email, hash, active FROM users WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
		$match  = mysqli_num_rows($search);
                 
		if($match > 0){
        // We have a match, activate the account
        mysqli_query($conn,"UPDATE users SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error());
        echo "<script type='text/javascript'>alert('Your account has been activated, you can now login.');</script>";
		//include("signLog.html");
		header('location:signLog.php');
		//echo '<div class="statusmsg"><center>Your account has been activated, you can now login</center></div>';
		}else{
			 echo "<script type='text/javascript'>alert('The url is either invalid or you already have activated your account.');</script>";
			//include("signLog.html");
			header('location:signLog.php');
        // No match -> invalid url or account has already been activated.
		//echo '<div class="statusmsg"><center>The url is either invalid or you already have activated your account.</center></div>';
		}
	}
             
        ?>
        <!-- stop PHP Code -->
 
         
    </div>
    <!-- end wrap div --> 
</body>
</html>