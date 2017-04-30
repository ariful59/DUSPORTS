<?php
	session_start();
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			$email=$_SESSION['email'];
			$username=$_SESSION['username'];
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;		
	}
	$conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
	//$conn = new mysqli('localhost', 'root', '', 'WebProject');
	if($conn->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
		
	if($_FILES["image"]==NULL)
	{
		//echo "<script type='text/javascript'>alert('Please select an image');</script>";
		echo "<script>
			alert('Please select an image.');
			window.location.href='admissionswimMain.php';
			</script>";
		
	}
	else
	{	
		$imageName=mysqli_real_escape_string($conn,$_FILES["image"]["name"]);
		$imageData=mysqli_real_escape_string($conn,file_get_contents($_FILES["image"]["tmp_name"]));
		$name=$_POST['name'];
		$father_name=$_POST['father_name'];
		$subject=$_POST['subject_select'];
		$guardian_address=$_POST['guardian_address'];
		$phone=$_POST['phone'];
		$date_of_birth=$_POST['date'];

		$highBloodPressure=0;
		$epilepsy=0;
		$asthoma=0;
		$skinDieases=0;
        if(isset($_POST['HighBloodPressure'])){
            $highBloodPressure=1;
        }
        if(isset($_POST['Epilepsy'])){
            $epilepsy=1;
        }
        if(isset($_POST['Asthoma'])){
            $asthoma=1;
        }
        if(isset($_POST['SkinDiseases'])) {
            $skinDieases = 1;
        }
		if($_FILES["paying_slip"]==NULL)
		{
			echo "<script type='text/javascript'>alert('Please select an image');</script>";
			
		}
		else
		{	
			$payingData=mysqli_real_escape_string($conn,file_get_contents($_FILES["paying_slip"]["tmp_name"]));
			
			$conn->query("INSERT INTO hello(name,father_name,subject,guardian_address,phone,date_of_birth,high_blood_pressure,epilepsy,asthoma,skin_dieases,email,image_name,image,paying_slip) VALUES('".$name."','".$father_name."','".$subject."','".$guardian_address."','".$phone."','".$date_of_birth."','".$highBloodPressure."','".$epilepsy."','".$asthoma."','".$skinDieases."','".$email."','".$imageName."','".$imageData."','".$payingData."')");
			header('location:formswimcheck');
		}
	}
	//header("location:admissionswimMain.php");
			
?>