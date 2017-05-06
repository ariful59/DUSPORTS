<!DOCTYPE html>
<html lang="en">

<head>

    <title>Current News</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">

    <script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/icomoon-social.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>



</head>

<body>
<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="."><img src="img/logo.png"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href=".">HOME</a></li>
                <li><a href="gym">GYMNASIUM</a></li>
                <li><a href="swim">SWIMMING</a></li>
                <li class="active" class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">EVENT<i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="news">NEWS</a></li>
                        <li><a href ="live" target="_blank">LIVE</a></li>
                    </ul>
                </li>
                <li><a href="about-us">ABOUT US</a></li>
                <li><a href="contact-us">CONTACT</a></li>

                <?php
                if(!isset($_SESSION))
                {
                    session_start();
                }
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    $username=$_SESSION['username'];
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    $Email=$_SESSION['email'];
                    $_SESSION['email'] = $Email;
                    //echo $Email;

                    ?>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><px><?php echo $username ?></px><i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">PROFILE</a></li>
                            <li><a href="logout">LOGOUT</a></li>
                        </ul>
                    </li>

                    <?php
                }
                else{
                    $username="REGISTER"; ?>
                    <li ><a href="signLog"><?php echo $username ?></a></li>

                    <?php
                }
                ?>


            </ul>
        </div>
    </div>
</header>
<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Current News</h1>
            </div>
        </div>
    </div>
</div>

<?php
	//$con=mysqli_connect("localhost","root","","WebProject");
    $conn = mysqli_connect('localhost', 'dusports', 'dusports', 'dusports');

$result = $conn->query("select * from news;");

	while($row = $result->fetch_assoc()){
		echo "<div class=\"jumbotron text-center\">";
		echo "<p>".$row['Date']."<br> ".$row['News']."<br></p>";
		echo "</div>";
	}

?>

<div class="footer">
    <div class="container">

        <div class="row">

            <div class="col-footer col-md-4 col-xs-6">
                <h3>Contact Us</h3>
                <p class="contact-us-details">
                    <b>Address:</b> University of Dhaka, Dhaka, Bangladesh<br/>
                    <b>Phone1:</b> +880 1521211564<br/>
                    <b>Email:</b> <a href="">dusports17@gmail.com</a></br>
                </p>
            </div>
            <div class="col-footer col-md-4 col-xs-6">
                <h3>Our Social Networks</h3>
                <p>If you like to contact with us.</p>
                <div>
                    <img src="img/icons/facebook.png" width="32" alt="Facebook">
                    <img src="img/icons/twitter.png" width="32" alt="Twitter">
                    <img src="img/icons/linkedin.png" width="32" alt="LinkedIn">
                </div>
            </div>
            <div class="col-footer col-md-4 col-xs-6">
                <h3>About Our Works</h3>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer-copyright">&copy; 2017 <a href="">Dhaka University</a> Sports. By <a href="https://www.facebook.com/arifulaminrumi">Ariful Amin &</a>
                    <a href="https://www.facebook.com/abdurrouf.ab">Abdur Rouf</a>
                </div>
            </div>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript">
        $(function() {

            $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

        });
    </script>
</body>
</html>