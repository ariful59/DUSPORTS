<!DOCTYPE html>
<html lang="en">

<head>
    <title>DU Swiming Pool Admission</title>

    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/myCss.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/mystyle.css">
	<link rel="stylesheet" href="css/gymn.css">
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script type="text/javascript">

	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(90)
                    .height(90)
					;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
		<style>
		hei{
			height:500px;
		}
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
					<li><a href="swim">SWIMMING</a></li>
                    <li class="active"><a href="admissionswim">ADMISSION</a></li>
                    
					<li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">NOTICE<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
							<li><a href="scheduleswim">SCHEDULE</a></li>
                            <li><a href="termswim">TERMS & POLICY</a></li>
                            <li><a href="notice">NOTICE BOARD</a></li>
							
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

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<center><h1>Welcome To Admission Page of DHAKA UNIVERSITY SWIMMING POOL</h1></center>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
	<div class='fullForm'>
    <div class='panel panel-primary dialog-panel' style='background-color:#dbe8ff'>
      
    <div class='panel-body'>
    <form class='form-horizontal' id='form' role='form' action="admissionswim.php" method="POST" enctype="multipart/form-data">
	<div class='image_pos'>	
	<table>
    <tr>
        <td valign="top"><img src="img/portfolio/logodu.jpg" height="100" width="80"/></td>
        <td valign="middle"><div class='heading_pos'><center><b>SWMMING POOL</b></br>ADMISSION FORM FOR SWIMMING</br>STUDENTS/TEACHERS/STUFF/OUTSIDER</center></div></td>
		<td valign="bottom">
			<div class='heading_pos'>
				<input type='file' name="image" onchange="readURL(this);"/>
				<img id="blah"/>
			</div>
			
		</td>
    </tr>
	</table> 
	</div>
	<div class='name_div'>
            <label class="name_label">Name</label>
			<input required="required" class='name_input' id='name' name='name'  placeholder='Enter-Your-Name' type='text'>
    </div>
	<div class='f_name_div'>
    <label class="f_name_label">FatherName</label>
	<input required="required" class='f_name_input' id='father_name' name='father_name'  placeholder='Enter-Your-Father Name' type='text'>
    </div>
	 <div class='subject_div'>
				<label class="subject_label">Subject</label>
				<select name="subject_select" id="subject_select" class='subject_select'>
                  <option value="Computer Science And Engineering">Computer Science And Engineering</option>
				  <option value="Information Technology">Information Technology</option>
				  <option value="MICROBIOLOGY">MICROBIOLOGY</option>
				  <option value="FARMACY">FARMACY</option>
                </select>
	</div>
		   
	<div class='guardian_div'>
            <label class="guardian_label">Guardian Adress</label>
			<input required="required" class='guardian_input' id='guardian_address' name='guardian_address'  placeholder='Enter-Your guardian Address' type='text'>
    </div>
		   
	<div class='phone_div'>
            <label class="phone_label">Phone Number</label>
			<input required="required" class='phone_input' id='phone' name='phone'  placeholder='Enter-Your Phone Number' type='phone'>
    </div>
	 
	<div class='date_div'>
            <label class="date_label">Date Of Birth</label>
			  <input required="required" name="date" class="date_input_one" type="date">
    </div>

	<div class='physical_div'>
    <label class="physical_label">Physical Illness</label>
    </div>
		   
	<div class='radio_div'> 
		  <input type="radio" name="HighBloodPressure" value="High Blood Pressure" > High Blood Pressure<br>
		  <input type="radio" name="Epilepsy" value="Epilepsy"> Epilepsy<br>
		  <input type="radio" name="Asthoma" value="Asthoma"> Asthoma<br>
		  <input type="radio" name="SkinDiseases" value="Skin Diseases"> Skin Diseases<br>
	</div>
	<div class='name_div'>
          <label class="name_label"><u>Paying slip/ ID card</u> </label>
		  <input required="required" name="paying_slip" type="file">
	</div>
    <div class='form-group'>
		<div class='col-md-offset-4 col-md-4'>
              <button class='reg_button' id='btnSubmit' type='submit'>Register</button>
        </div>
	</div>
		 
    </form>
	</div>
    </div>
    </div>
		

    <br>

		
		

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