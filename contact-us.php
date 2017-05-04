<!DOCTYPE html>
 <html class="no-js">
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Us</title>
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
                <a class="navbar-brand" href="dusports"><img src="img/logo.png" alt="Basica"></a>
            </div>
			<div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="dusports">HOME</a></li>
					<li><a href="gym">GYMNESIUM</a></li>
                    <li><a href="swim">SWIMMING</a></li>
                    <li class="dropdown">
                        <a href="about-us" class="dropdown-toggle" data-toggle="dropdown">EVENT<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">News</a></li>
                            <li><a href="Logout.php">Live</a></li>
                        </ul>
                    </li>
                    <li><a href="about-us">ABOUT US</a></li> 
                    
					<li class="active"><a href="contact-us">CONTACT</a></li>
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
								<li><a href="logout">Logout</a></li>
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
    </header><!--/header-->

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Contact Us</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section section-map">


	        		<div class="col-sm-12" style="padding:0;">
	        			<!-- Map -->
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58426.26883334272!2d90.36109111065271!3d23.760149553484315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ef3976bbbd%3A0x1b3140066a1d7bb8!2sDepartment+of+Computer+Science+and+Engineering!5e0!3m2!1sen!2sbd!4v1492244860905" width="1360" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
						<!-- End Map -->
					</div>


	    </div>

     
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