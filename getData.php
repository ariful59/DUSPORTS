<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id=$_GET['id'];

    $conn = new mysqli('localhost', 'root', '', 'WebProject');

    $sql = "SELECT * FROM colleges WHERE id='".$id."'";

    $r = mysqli_query($conn,$sql);

    $res = mysqli_fetch_array($r);

    $result = array();

    array_push($result,array(
            "name"=>$res['name'],
            "address"=>$res['address'],
            "vc"=>$res['vicechancellor']
        )
    );

    echo json_encode(array("result"=>$result));

    mysqli_close($conn);

}
?>