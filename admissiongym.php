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
		echo "<script type='text/javascript'>alert('Please select an image');</script>";
		
	}else{
		
		
	  $imageName=mysqli_real_escape_string($conn,$_FILES["image"]["name"]);
	  $imageData=mysqli_real_escape_string($conn,file_get_contents($_FILES["image"]["tmp_name"]));	
	  //$conn->query("INSERT INTO imagesave(name,image) VALUES('".$imageName."','".$image."')");
	  $name=$_POST['name'];
	  $father_name=$_POST['father_name'];
	  $mother_name=$_POST['mother_name'];
	  $designation=$_POST['desi_select'];
	  $subject=$_POST['subject_select'];
	  $date_of_birth=$_POST['date'];
	  $profession=$_POST['profession_name'];
	  
	  $male=0;
	  $female=0;
	  $gender=$_POST['male'];
	  $nationality=$_POST['nationality'];
	  $religion=$_POST['religion'];
	  $weight=$_POST['weight_select'];
	  $height_foot=$_POST['height_select_foot'];
	  $height_inches=$_POST['height_select_inches'];
	  $educational_status=$_POST['edu_select'];
	  $present_address=$_POST['present_add'];
	  $premanent_address=$_POST['permanent_add'];
	  $phone=$_POST['phone'];
	  $physical_illness=$_POST['phsical_ill'];
	  if($_FILES["paying_slip"]==NULL)
		{
			echo "<script type='text/javascript'>alert('Please select an image');</script>";
			
		}
		else
		{	
			$payingData=mysqli_real_escape_string($conn,file_get_contents($_FILES["paying_slip"]["tmp_name"]));
			
			 $conn->query("INSERT INTO gym(name,father_name,mother_name,designation,subject,date_of_birth,profession,nationality,religion,gender,weight,height_foot,height_inches,educational_status,present_address,premanent_address,phone,physical_illness,image_name,image,email,paying_slip) VALUES('".$name."','".$father_name."','".$mother_name."','".$designation."','".$subject."','".$date_of_birth."','".$profession."','".$nationality."','".$religion."','".$gender."','".$weight."','".$height_foot."','".$height_inches."','".$educational_status."','".$present_address."','".$premanent_address."','".$phone."','".$physical_illness."','".$imageName."','".$imageData."','".$email."','".$payingData."')");
			 header('location:formgymcheck');
		}
	}

?>