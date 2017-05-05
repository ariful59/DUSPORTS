<?php

	if(isset($_POST['submitButtonAdmin'])){
	$Email=$_POST["Email"];
    $Password=($_POST["Password"]);
    //$conn = new mysqli('localhost', 'root', '', 'WebProject');
        $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    if($conn->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

        $sql="SELECT * FROM admin where Email='$Email' and Password='$Password'";
        $result= $conn->query($sql);
        $arrayResult=mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);

        if($count>=1){
            include("dashboard.php");
        }
        else{
            echo "<script type='text/javascript'>alert('Login Failed! Please make sure that you enter the correct details and that you have activated your account.');</script>";
            include("signLogAdmin.php");
        }

}
?>