<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');

    //$conn = new mysqli('localhost', 'root', '', 'WebProject');
    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    if ($_FILES["image"] == NULL) {
        echo "<script type='text/javascript'>alert('Please select an image');</script>";

    } else {


        $imageName = mysqli_real_escape_string($conn, $_FILES["image"]["name"]);
        $imageData = mysqli_real_escape_string($conn, file_get_contents($_FILES["image"]["tmp_name"]));
        //$conn->query("INSERT INTO imagesave(name,image) VALUES('".$imageName."','".$image."')");

        $res = mysqli_query($conn, "INSERT INTO admin_gym(email,image_name,image) VALUES('" . $email . "','" . $imageName . "','" . $imageData . "' )");
        echo "<script>
				alert('Pending for check out by admin. You will be notified via email when the admin confirm');
				window.location.href='gym';
				</script>";
    }
}
else {
    echo "<script>
				alert('Something Error');
				window.location.href='gym';
				</script>";
}

?>