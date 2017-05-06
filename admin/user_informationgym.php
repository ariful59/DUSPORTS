<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
<?php
if(!isset($_SESSION))
{
    session_start();
}
?>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/back.jpg">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="home" class="simple-text">
                    DU SPORTS
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-graph"></i>
                        <p>User Profile</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="admin">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="home" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logout">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--
        here we change
        -->
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            $email = $_SESSION['email'];
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
            //$conn=mysqli_connect("localhost","root","","WebProject");
            $sql="SELECT * FROM gym where email='$email'";
            $result= $conn->query($sql);
            while($row = $result->fetch_assoc()){
                ?>
                <div class="content table-responsive table-full-width">
                    <center><h3>User Gymnasium Details</h3></center>
                    <table class="table table-hover table-striped">
                        <thead>
                        <th>Title</th>
                        <th>Information</th>
                        </thead>
                        <tbody>

                        <?php

                        echo "<tr><td>Email</td><td>" . $row['email'] . "</td></tr>";
                        echo "<tr><td>Name</td><td>" . $row['name'] . "</td></tr>";
                        echo "<tr><td>Father Name</td><td>" . $row['father_name'] . "</td></tr>";
                        echo "<tr><td>Mother Name</td><td>" . $row['mother_name'] . "</td></tr>";
                        echo "<tr><td>Designation</td><td>" . $row['designation'] . "</td></tr>";
                        echo "<tr><td>Subject</td><td>" . $row['subject'] . "</td></tr>";
                        echo "<tr><td>Birth of Date</td><td>" . $row['date_of_birth'] . "</td></tr>";
                        echo "<tr><td>Profession</td><td>" . $row['profession'] . "</td></tr>";
                        echo "<tr><td>Nationality</td><td>" . $row['nationality'] . "</td></tr>";
                        echo "<tr><td>Religion</td><td>" . $row['religion'] . "</td></tr>";
                        echo "<tr><td>Gender</td><td>" . $row['gender'] . "</td></tr>";
                        echo "<tr><td>Weight</td><td>" . $row['weight'] . "</td></tr>";
                        echo "<tr><td>Height</td><td>" . $row['height_foot'] ." Foots", " " . $row['height_inches'] ."</td></tr>";
                        echo "<tr><td>Educational Status</td><td>" . $row['educational_status'] . "</td></tr>";
                        echo "<tr><td>Present Address</td><td>" . $row['present_address'] . "</td></tr>";
                        echo "<tr><td>Premanent Address</td><td>" . $row['premanent_address'] . "</td></tr>";
                        echo "<tr><td>Phone</td><td>" . $row['phone'] . "</td></tr>";
                        echo "<tr><td>Physical Illness</td><td>" . $row['physical_illness'] . "</td></tr>";
                        echo '
                                <tr>
                                <tr><td>User Photo</td>
                                <td>
                                <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="80" width="100" class="img-thumnail" />
                                </td>
                                </tr>';
                        echo '
                              <tr>
                              <tr><td>Paying Slip of varsity admission/ varsity </td>
                              <td> <img src="data:image/jpeg;base64,'.base64_encode($row['paying_slip'] ).'" height="80" width="100" class="img-thumnail" />
                              </td></tr>';

                        $sql="SELECT * FROM admin_gym where email='$email'";
                        $hello= $conn->query($sql);
                        while($row = $hello->fetch_assoc()){
                            echo '
                               <tr>
                               <tr><td>Paying slip for swimming pool</td>
                               <td> <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="80" width="100" class="img-thumnail" />
                               </td></tr>';
                        }

                        ?>

                        </tbody>
                    </table>
                </div>


                <?php

            }
        }
        ?>
    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>Du Sports </b> Dashboard."

        },{
            type: 'info',
            timer: 4000
        });

    });
</script>

</html>