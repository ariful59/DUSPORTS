<?php

    //$conn = new mysqli('localhost', 'root', '', 'WebProject');
$conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    $result=$conn->query("SELECT * from football WHERE NO =1;");
    $row = mysqli_fetch_object($result);

    //$connn = new mysqli('localhost', 'root', '', 'WebProject');
    $result=$conn->query("SELECT * FROM `goal_giver`");
    $goal_output="";

    while (($res = mysqli_fetch_assoc($result))){
        $goal_output=$goal_output.$res["Goal_giver"]."<br>";
    }
    $myJSON = json_encode($row);
    echo $myJSON;
?>