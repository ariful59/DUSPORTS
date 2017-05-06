<!DOCTYPE html>
<html >
<head>

  
	<title>DU SPORTS</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
	<link href="css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/myCss.css">
	<link href="css/custom.css" rel="stylesheet">
	
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style>
	P{
		margin-top:90px;
		margin-bottom:-30px;
	}
	PX{
		height:1000px;
	}
	pp{	
		border: 2px solid #00EBEB;
		padding: 5px;
	}
	</style>
	<script type="text/javascript">
	function checker()
	{
			var value=document.getElementById("namet").value;
			var warn=document.getElementById("hello");
			if(value.length < 6){
				hello.innerHTML ="at least 6 digits";
				document.getElementById('submit').disabled=true;
			}
			else{
				hello.innerHTML ="";
				document.getElementById('submit').disabled=false;
		
			}
			
	}
	</script>
  
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
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">EVENT<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="news">News</a></li>
                            <li><a href ="live" target="_blank">Live</a></li>
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
					<li class="active"><a href="signLog"><?php echo $username ?></a></li>				
               
				<?php			   
					}
					?>	
				
				
				 </ul>
            </div>
        </div>
    </header>
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/slides/swi1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content centered">
								<div class="login-wrap">
		<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">LogIn</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">SignUp</label>
		<div class="login-form">
			<form method="POST" action="LogIn.php">
				<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input type="text" class="input" name="Email" id="email" style="background-color: #709fa3;">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="Password" style="background-color: #709fa3;">
				</div>
				<div class="group">
					<a href="forgotpassword">Forgot your password?</a>
					
				</div><br>
				<div class="group">
					<input type="submit" class="button" name="logInButton">
				</div>
				<div class="hr"></div>
				</div>
			</form>
			<form action="signcheck" method="post">
			
				<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">FirsName</label>
					<input type="text" class="input" required="required" name="FirstName" style="background-color: #709fa3;">
				</div>
				<div class="group">
					<label for="user" class="label">LastName</label>
					<input type="text" required="required" class="input" name="LastName" style="background-color: #709fa3;">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input type="text" required="required" class="input" name="Email" style="background-color: #709fa3;">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input type="password" id="namet" required="required" class="input" data-type="password" name="password" style="background-color: #709fa3" onkeyup="checker(); return false;" />
					<h8 id="hello"></h8>
				</div>
				<br>
				<div class="group">
					<input type="submit" id="submit" class="button" value="Sign Up" name="SignUp" disabled />
				</div>
				<div class="hr">
				</div>
			</div>
			
			</form>
			
		</div>
	</div>
	</div>							
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</section>


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
