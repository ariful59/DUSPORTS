<!DOCTYPE html>
<html class="no-js"> 
<html lang="en">
<head>

    <title>DU SPORTS</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js">
	function change()
	{
		str=document.getElementById()
		
		
	}
	
	
	</script>
	<style>
	px{	
		border: 3px solid  #525252;
		box-shadow: 2px 2px 2px  #525252;
		padding: 5px;
	}
	</style>
	<scricp
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
                    <li class="active"><a href=".">HOME</a></li>
					<li><a href="gym">GYMNASIUM</a></li>
                    <li><a href="swim">SWIMMING</a></li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">EVENT<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="news">News</a></li>
                            <li><a href="live">Live</a></li>
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
    </header>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/slides/swi2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Welcome to University of Dhaka Sports</h2>
                                    <p class="animation animated-item-2">You can get admission in swimming pool, gymnasium and also know latest update of Dhaka University Sports</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(img/slides/two.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1">
									Admission Going On!</br> Hurry Up!!
									</h2>
                                    <p class="animation animated-item-2">
									To learn swimming, training on basketbal, cricket, football and volleyball you can admit in the dhaka University Swimming pool and Gymnasium.
									</p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(img/slides/swi1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">
									Get live Score for any local game!!
									</h2>
                                    <p class="animation animated-item-2">
									There are a lot of local game which is played in dhaka university's field. You can get instance update of those game from here. 
									
									</p>
                                    <br>
									<a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
	    <div class="section section-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							<h3>WELCOME TO  <span style="color:#aec62c; text-transform:uppercase;font-size:24px;">UNIVERSITY OF DHAKA</span> SPORTS</h3> 
						
						</div>
					</div>
				</div>
			</div>
		</div>
		
        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
							<img src="img/portfolio/icon1.jpg" alt="img02">
		        			<h3>Gymnasium</h3>
		        			<p>The gymnasium of dhaka university is very renowned and ancient. People from around the dhaka university area comes herer. It is also highly facilitated with different Instruments</p>
		        			<a href="#" class="btn">Read more</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
							<img src="img/portfolio/icon2.jpg" alt="img02">
		        			<h3>Swimming Pool</h3>
		        			<p>Swimming is a good all-round activity because it keeps your heart rate up. If you are looking for a well accomplished swimming pool then dhaka university's swimming pool commes first. </p>
		        			<a href="#" class="btn">Read more</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="icon-home" style="font-size: 7.00em;"></i>
		        			<h3>Dhaka University Sports Club</h3>
		        			<p>There are a lot of renowned sports club in dhaka university. Sports club often organized games like football, cricket, tennis etc.
                                Sports club palys an important roll in dhaka university sports.
							
							.
							</p>
		        			<a href="#" class="btn">Read more</a>
		        		</div>
	        		</div>
	        	</div>
	        </div>
	    </div>

<hr>
        <div class="section">
	    	<div class="container">
				<div class="row">
			
			<ul class="grid cs-style-2">
	        	<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/portfolio/one.jpg">
						<figcaption>
							<h3>Cricket Update</h3>
							<span>DU VS JU</span>
							<a href="#">Take a look</a>
						</figcaption>
					</figure>
	        	</div>	
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/portfolio/two.jpg" alt="img01">
						<figcaption>
							<h3>Football Update</h3>
							<span>DU VS JNU</span>
							<a href="p#">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/portfolio/four.jpg" alt="img02">
						<figcaption>
							<h3>VOLLEY BALL</h3>
							<span>DU VS RU</span>
							<a href="#">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/portfolio/three.jpg" alt="img05">
						<figcaption>
							<h3>SWIMMING POOL</h3>
							<span>LATEST RESULT OF SWIM</span>
							<a href="#">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="img/portfolio/five.jpg" alt="img03">
						<figcaption>
							<h3>GYMNASIUM UPDATE</h3>
							<span>SCHEDULE FOR GYMNASIUM</span>
							<a href="#">Take a look</a>
						</figcaption>
					</figure>
				</div>
			</ul>

				
				</div>
				
			</div>
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