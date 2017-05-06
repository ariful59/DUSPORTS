<?php

if(isset($_POST['enter_button'])){

    $time=$_POST['time'];
    $team1=$_POST['team1'];
    $team2=$_POST['team2'];
    $score_team1=$_POST['score_team1'];
    $score_team2=$_POST['score_team2'];

   // $conn = new mysqli('localhost', 'root', '', 'WebProject');
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    if($conn->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $conn->query("INSERT INTO football(Time,Team1,Team2,score_team1,score_team2,No) VALUES('".$time."','".$team1."','".$team2."','.$score_team1.','$score_team2',1)");

    echo "<script type='text/javascript'>alert('Suceesfully Inserted');</script>";
    //include("livedash.html");
    header("location:livedash.php");
}
else if(isset($_POST['update_button'])){

    $time=$_POST['time2'];
    $score_team1=$_POST['score_team12'];
    $score_team2=$_POST['score_team22'];

   // $conn = new mysqli('localhost', 'root', '', 'WebProject');
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    if($conn->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $conn->query("UPDATE football set TIME ='".$time."',score_team1='".$score_team1."',score_team2='".$score_team2."' where No=1");

    if($_POST['goal_giver']!=null){
        $team_name=$_POST['team_name'];
        $goal_giver=$_POST['goal_giver'];
        $conn = new mysqli('localhost', 'root', '', 'WebProject');
        if($conn->connect_errno){
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $conn->query("Insert into goal_giver(Time,Team_name,Goal_giver) VALUE ('".$time."','".$team_name."','".$goal_giver."');");
    }
    echo "<script type='text/javascript'>alert('Suceesfully Updated');</script>";
    //include("livedash.html");
    header("location:live");
}
?>