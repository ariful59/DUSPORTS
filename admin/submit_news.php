<?php

if(isset($_POST['enter_button'])){

    $Date=$_POST['date'];
    $News=$_POST['news'];

    //$conn = new mysqli('localhost', 'root', '', 'WebProject');
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    if($conn->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $conn->query("INSERT INTO news(Date,News) VALUES('".$Date."','".$News."')");

    echo "<script type='text/javascript'>alert('Suceesfully Inserted');</script>";
    //include("newsadmin.php");
    header("location:news");
}
else if(isset($_POST['delete_button'])){

    $News_no=$_POST['news_no'];

    //$conn = new mysqli('localhost', 'root', '', 'WebProject');
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    if($conn->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $conn->query("delete from news WHERE  News_no=".$News_no);

    echo "<script type='text/javascript'>alert('Suceesfully Deleted');</script>";
   header("location:news");
    // include("newsadmin.php");
}
?>