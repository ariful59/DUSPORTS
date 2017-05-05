<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>News Admin</title>

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
	
	<style>

        .news,.date{
            margin-bottom: 20px;
        }
		.div_news{
            border: double;
        }

		
    </style>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/back.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    DU SPORTS
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="tableadmin.php">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
				<li>
                    <a href="notificationadmin.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notice Board</p>
                    </a>
                </li>
				<li class="active">
                    <a href="newsadmin.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>NewsPaper</p>
                    </a>
                </li>
				<li>
                    <a href="livedash.php">
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="newsadmin.php">News</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="dashboard.php" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <a href="signLogAdmin.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
			
			
		
        </nav>
		<div class="div_news">
				<form action="submit_news.php" method="post" class="news_form">

					<div class="news_enter">
						<h1>Enter News</h1>
						<input type="text" class="news" placeholder="Enter a news" name="news" style="height:100px; width: 50%; font-size: 20px;"><br>
						<input type="text" class="date" placeholder="Enter date" name="date" style="height:50px; width: 30%; margin-top: 20px; font-size: 18px;"><br>

						<button type="submit" value="Enter News" name="enter_button" style="color:#ffffff;background-color: #233028; height: 50px; width: 100px;">Enter News</button>
					</div>

					<div class="news_delete">
						<h1>Delete News</h1>
						<input type="text" class="date" placeholder="Enter news no"  style="height:50px; font-size: 18px;" name="news_no"><br>

						<button type="submit" value="Delete News" name="delete_button" style="color:#ffffff;background-color: #233028; height: 50px; width: 100px;">Delete News</button>
					</div>

				</form>
			</div>


        <div class="content table-responsive table-full-width">
            <center><h3>News</h3></center>
            <table class="table table-hover table-striped">
                <thead>
                <th>News_No</th>
                <th>Date</th>
                <th>News</th>
                </thead>
                <tbody>

                <?php
                //$con=mysqli_connect("localhost","root","","WebProject");
                $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
                $result = $conn->query("select * from news;");

                    while($row = $result->fetch_assoc()){
                        echo "<tr><td>".$row['News_no']."</td><td>".$row['Date']."</td><td>".$row['News']."</td></tr>";
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
