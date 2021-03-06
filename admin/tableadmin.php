<?php
if(!isset($_SESSION))
{
    session_start();
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $email = $_SESSION['email'];
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

        <title>Table List</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
        <meta name="viewport" content="width=device-width"/>


        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>

        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet"/>

        <!--  Light Bootstrap Table core CSS    -->
        <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="assets/css/demo.css" rel="stylesheet"/>


        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet"/>
    </head>
    <body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/back.jpg">

            <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="home" class="simple-text">
                        DU SPORTS
                    </a>
                </div>

                <ul class="nav">
                    <li>
                        <a href="home">
                            <i class="pe-7s-graph"></i>
                            <p>Pending List</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="studentlist">
                            <i class="pe-7s-note2"></i>
                            <p>Student List</p>
                        </a>
                    </li>
                    <li>
                        <a href="notice">
                            <i class="pe-7s-bell"></i>
                            <p>Notice Board</p>
                        </a>
                    </li>
                    <li>
                        <a href="news">
                            <i class="pe-7s-news-paper"></i>
                            <p>News Updater</p>
                        </a>
                    </li>
                    <li>
                        <a href="live">
                            <i class="pe-7s-science"></i>
                            <p>Live Football</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="studentlist">Table List</a>
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

            <div class="content table-responsive table-full-width">
                <center><h3 style="color:#374496">Members of Gymnesium</h3></center>
                <table class="table table-hover table-striped">
                    <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Registration</th>
                    <th>Email</th>
                    </thead>
                    <tbody>
                    <?php
                    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
                    //$conn = mysqli_connect("localhost", "root", "", "WebProject");
                    $sql = "select * from admin_gym  where active=1;";
                    $result = $conn->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        $email = $row['email'];
                        $sql1 = "SELECT * FROM users where email='$email'";
                        $sql2 = "SELECT * FROM registration1 where email='$email'";
                        if ($result1 = $conn->query($sql1)) {
                            if ($result2 = $conn->query($sql2)) {
                                $row1 = $result1->fetch_assoc();
                                $row2 = $result2->fetch_assoc();
                                $name = $row1['username'];
                                $reg=$row2['reg'];
                                echo "<tr><td>" . $row['id'] . "</td><td>" . $name . "</td><td> " . $reg . "  </td><td>" . $row['email'] . "</td></tr>";
                            }
                        }
                    }

                    ?>

                    </tbody>
                </table>

            </div>

            <div class="content table-responsive table-full-width">
                <center><h3 style="color:#374496">Members of SwimingPool</h3></center>
                <table class="table table-hover table-striped">
                    <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Registration</th>
                    <th>Email</th>
                    </thead>
                    <tbody>
                    <?php
                   //$conn = mysqli_connect("localhost", "root", "", "WebProject");
                    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
                    $sql = "select * from admin_swim  where active=1;";
                    $result = $conn->query($sql);
                    $sql2 = "SELECT * FROM registration2 where email='$email'";
                    while ($row = $result->fetch_assoc()) {
                        $email = $row['email'];
                        $sql1 = "SELECT * FROM users where email='$email'";
                        if ($result1 = $conn->query($sql1)) {
                            if ($result2 = $conn->query($sql2)) {
                                $row1 = $result1->fetch_assoc();
                                $row2 = $result2->fetch_assoc();
                                $name = $row1['username'];
                                $reg = $row2['reg'];
                                echo "<tr><td>" . $row['id'] . "</td><td>" . $name . "</td><td>" . $reg . "</td><td>" . $row['email'] . "</td></tr>";
                            }
                        }
                    }
                    ?>

                    </tbody>
                </table>

            </div>


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


    </html>
    <?php
}
    ?>