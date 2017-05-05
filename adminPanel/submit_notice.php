<?php

if(isset($_POST['enter_button'])){

    $Date=$_POST['date'];
    $Notice=$_POST['notice'];

    //$conn = new mysqli('localhost', 'root', '', 'WebProject');
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    if($conn->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $conn->query("INSERT INTO notice(Date,Notice) VALUES('".$Date."','".$Notice."')");

    echo "<script type='text/javascript'>alert('Suceesfully Inserted');</script>";
    include("notificationadmin.php");
}
else if(isset($_POST['delete_button'])){

    $Notice_no=$_POST['notice_no'];

    //$conn = new mysqli('localhost', 'root', '', 'WebProject');
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    if($conn->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $conn->query("delete from notice WHERE  Notice_no=".$Notice_no);

    echo "<script type='text/javascript'>alert('Suceesfully Deleted');</script>";
    include("notificationadmin.php");
}
?>