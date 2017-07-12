<?php
   // $conn = new mysqli('localhost', 'root', '', 'webproject');
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
    mysqli_query($conn,"SET CHARACTER SET utf8");
    mysqli_query($conn,"SET SESSION collation_connection ='utf8_general_ci'") or die (mysqli_error());
    mysqli_query($conn,"SET CHARACTER_SET_RESULTS = utf8");
    $sql = "SELECT * FROM contact";
    $r = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $result = array();
    while($res = mysqli_fetch_array($r)) {
        array_push($result, array(
                "name" => $res['name'],
                "address" => $res['address'],
                "email" => $res['email'],
                "phone_number" => $res['phone_number'],
                "university" => $res['university'],
                "dept_name" => $res['dept_name'],
                "year" => $res['year'],
                "blood_group" => $res['blood_group']
            )

        );
    }

    echo json_encode($result);

    mysqli_close($conn);

?>
