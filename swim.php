<!DOCTYPE html>
<html lang="en">

<head>
    <title>DU SWIMING POOL</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
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
                <a class="navbar-brand" href="."><img src="img/logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href=".">HOME</a></li>
					<li class="active"><a href="swim">SWIMMING</a></li>
                    <li id="myBtn"><a href="LoginCheckswim">ADMISSION</a></li>
					 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">NOTICE<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
							<li><a href="scheduleswim">SCHEDULE</a></li>
                            <li><a href="termswim">TERMS & POLICY</a></li>
                            <li><a href="notice">NOTICE BOARD</a></li>
							
                        </ul>
                    </li>
                    <li><a href="about-us">ABOUT US</a></li> 
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
								<li><a href="logout">Logout</a></li>
							</ul>
						</li>
				
					<?php 
					} 
					 else{
                         ?>
                         <li class="dropdown">
                             <a href="" class="dropdown-toggle" data-toggle="dropdown">REGISTER<i class="icon-angle-down"></i></a>
                             <ul class="dropdown-menu">
                                 <li><a href="signLog">USER</a></li>
                                 <li><a href ="./admin" target="_blank">ADMIN</a></li>
                             </ul>
                         </li>
               
				<?php			   
					}
					?>	
					</ul>
            </div>
        </div>
    </header>
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/slides/swi1.jpg)">
                </div>
                <div class="item" style="background-image: url(img/slides/swi2.jpg)">
                </div>
                <div class="item" style="background-image: url(img/slides/swi3.jpg)">
                </div>
				<div class="item" style="background-image: url(img/slides/swi5.jpg)">
                </div>
				<div class="item" style="background-image: url(img/slides/swi6.jpg)">
                </div>
				<div class="item" style="background-image: url(img/slides/swi7.jpg)">
                </div>
				<div class="item" style="background-image: url(img/slides/swi8.jpg)">
                </div>
				<div class="item" style="background-image: url(img/slides/swi9.jpg)">
                </div>
            </div>
        </div>
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section>
	</div>
	    <div class="section section-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							<h3>WELCOME TO <span style="color:#aec62c; text-transform:uppercase;font-size:24px;">UNIVERSITY OF DHAKA</span> SWIMMING POOL</h3> 
						
						</div>
					</div>
				</div>
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
	        				<b>Phone2:</b> +880 1521220835 <br/>
	        				<b>Email:</b> <a href="">arifulamindu@gmail.com, </a>
							<a href="">abdurrouf.csedu20@gmail.com</a>
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
		
        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		

    </body>
</html>