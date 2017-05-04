<!DOCTYPE html>
<html class="no-js">
<html lang="en">

<head>

    <title>About-Us</title>

    <link href="css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<style>
	px{	
		border: 3px solid  #525252;
		box-shadow: 2px 2px 2px  #525252;
		padding: 5px;
	}
	</style>

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
                <a class="navbar-brand" href="dusports"><img src="img/logo.png" alt=""></a>
            </div>
             <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="dusports">HOME</a></li>
					<li><a href="gym">GYMNASIUM</a></li>
                   <li><a href="swim">SWIMMING</a></li>
                    <li class="dropdown">
                        <a href="about-us" class="dropdown-toggle" data-toggle="dropdown">EVENT<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">News</a></li>
                            <li><a href="Logout.php">Live</a></li>
                        </ul>
                    </li>
				   
                    <li class="active"><a href="about-us">ABOUT US</a></li> 
                    <li><a href="contact-us">CONTACT</a></li>
					<?php
					session_start();
					if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
						$username=$_SESSION['username'];
						$_SESSION['loggedin'] = true;
						$_SESSION['username'] = $username;
						$Email=$_SESSION['email'];
						$_SESSION['email'] = $Email;
					?>
						<li class="dropdown">
							<a href="signLog" class="dropdown-toggle" data-toggle="dropdown"><px><?php echo $username ?></px><i class="icon-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Profile</a></li>
								<li><a href="Logout.php">Logout</a></li>
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

		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>About Us</h1>
					</div>
				</div>
			</div>
		</div>
        
         <div class="section">
	    	<div class="container">
				<div class="row">
			
			<ul class="grid cs-style-2">
	        	<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/portfolio/pic1.jpg">
						<figcaption>
							<h3>Ariful Amin</h3>
							<span>CSEDU</span>
						</figcaption>
					</figure>
	        	</div>	
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/portfolio/pic2.jpg" alt="img01">
						<figcaption>
							<h3>Abdur Rouf</h3>
							<span>CSEDU</span>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/portfolio/three.jpg" alt="img02">
						<figcaption>
							<h3>Hello World</h3>
							<span>CSEDU</span>
						</figcaption>
					</figure>
				</div>
			</ul>
		</div>
		
<hr>

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
		    			<div class="footer-copyright">&copy; 2017 <a href="">Dhaka University</a> Sports. By <a href="https://www.facebook.com/arifulaminrumi">dusports17@gmail.com</a>
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