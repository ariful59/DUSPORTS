<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Football Live Score</title>

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
				<li>
                    <a href="newsadmin.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>NewsPaper</p>
                    </a>
                </li>
				<li class="active">
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
                    <a class="navbar-brand" href="livedash.php">Live Football</a>
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
			
			<div class="form">
				<form action="submit_football.php" method="post">

					<label>Enter Team1</label>
					<input type="text" name="team1" placeholder="team1" style="height:25px"><br>
					<label>Enter Team2</label>
					<input type="text" name="team2" placeholder="team2" style="height:25px"><br>
					<label>Enter time</label>
					<input type="text" name="time" placeholder="00'" style="height:25px"><br>
					<label>Enter Score</label>
					<input type="text" name="score_team1" placeholder="team1" style="height:25px">
					<input type="text" name="score_team2" placeholder="team2" style="height:25px">
					<br>
					<button type="submit" name="enter_button">Enter</button>
					<br><br>
					<label>Enter time</label>
					<input type="text" name="time2" placeholder="00'" style="height:25px"><br>
					<label>Enter Score</label>
					<input type="text" name="score_team12" placeholder="team1" style="height:25px">
					<input type="text" name="score_team22" placeholder="team2" style="height:25px">
					<br>
					
					<label>Enter goal giver and team</label>
					<input type="text" placeholder="Enter team_name" name="team_name"><input type="text" placeholder="Enter goal giver name" name="goal_giver">
					<br>
					
					<button type="submit" name="update_button">Update</button>

				</form>
			</div>
		
        </nav>
		

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
