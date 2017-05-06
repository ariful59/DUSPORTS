<!DOCTYPE html>
<html lang="en">

<head>
    <title>DU Gymnesium Admission</title>
<link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/gymn.css">
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
	<style>
	px{	
		border: 3px solid  #525252;
		box-shadow: 2px 2px 2px  #525252;
		padding: 5px;
	}
	</style>
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
					<li><a href="gym">GYMAESIUM</a></li>
                    <li class="active"><a href="admissiongym">ADMISSION</a></li>
                    
					<li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">NOTICE<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
							<li><a href="schedulegym">SCHEDULE</a></li>
                            <li><a href="termgym">TERMS & POLICY</a></li>
                            <li><a href="noticegym">NOTICE BOARD</a></li>
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
						<center><h1>WELCOME TO ADMISSION PAGE OF DHAKA UNIVERSITY GYMNASIUM</h1></center>
					</div>
				</div>
			</div>
		</div>
	
       <div class='fullForm'>
    <div class='panel panel-primary dialog-panel' style='background-color:#dbe8ff'>
      
      <div class='panel-body'>
   <form class='form-horizontal' id='form' role='form' action="admissiongym.php" method="POST" enctype="multipart/form-data">
   <div class='image_pos'>	
	<table>
    <tr>
        <td valign="top"><img src="img/portfolio/logodu.jpg" height="100" width="80"/></td>
        <td valign="middle"><div class='heading_pos'><center><b>GYMNASIUM CENTER</b></br>ADMISSION FORM FOR GYMAESIUM</br>STUDENTS/TEACHERS/STUFF/OUTSIDER</center></div></td>
		<td valign="bottom">
			<div class='heading_pos'>
				<input type='file' name="image" onchange="readURL(this);" />
				<img id="blah"/>
			</div>
		</td>
    </tr>
	</table> 
	</div>

		  <div class='name_div'>
            <label class="name_label">Applicant Name</label>
			<input class='name_input' id='name' name='name'  placeholder='Enter-Your-Name' type='text' required="required">
          </div>
		  <div class='f_name_div'>
            <label class="f_name_label">Father Name</label>
			<input required="required" class='f_name_input' id='father_name' name='father_name'  placeholder='Enter-Your-Father Name' type='text'>
          </div>
		   <div class='m_name_div'>
            <label class="m_name_label">Mother Name</label>
			<input required="required" class='m_name_input' id='mother_name' name='mother_name'  placeholder='Enter-Your-Mother Name' type='text'>
          </div>
		  
		   <div class='subject_div'>
				<label class="designation_label"><u>FOR ADOPTION: FATHER/ MOTHER'S DESIGNATION AND DEPT.</u> </label>
			</div>	
			<div class='subject_div'>
				  <select name="desi_select" id="desi_select" class='desi_select'>
                  <option value="none">None</option>
                  <option value="Professor">Professor</option>
				  <option value="Associate Professor">Associate Professor</option>
				  <option value="Assistant Professor">Assistant Professor</option>
				  <option value="Lecturer">Lecturer</option>
                </select>
				<select name="subject_select" id="subject_select" class='subject_select'>
                  <option value="None">None</option>
                  <option value="Computer Science And Engineering">Computer Science And Engineering</option>
				  <option value="Information Technology">Information Technology</option>
				  <option value="MICROBIOLOGY">MICROBIOLOGY</option>
				  <option value="FARMACY">FARMACY</option>
                </select>
			</div>
		 
		  <div class='date_div'>
            <label class="date_label">Date Of Birth</label>
			  <input required="required" name="date" class="date_input_one" type="date">
          </div>

		  <div class='profession_div'>
            <label class="profession_label">Profession</label>
			<input required="required" class='profession_input' id='profession_name' name='profession_name'  placeholder='Enter-Your-Profession Name' type='text'>
          </div>
		  <div class='sex_div'>
            <label class="sex_label">Gender</label>
          </div>
		  <div class='sex_radio_div'> 
		  <input type="radio" name="male" value="male"> Male</br>
		  <input type="radio" name="male" value="female"> Female</br>
		  </div>
		<div class='phone_div'>
            <label class="phone_label">Nationality</label>
			<input required="required" class='phone_input' id='nationality' name='nationality'  placeholder='Enter-Your Nationality' type='text'>
          </div>
		  <div class='phone_div'>
            <label class="phone_label">Religion</label>
			<input required="required" class='phone_input' id='religion' name='religion'  placeholder='Enter-Your Religion' type='text'>
          </div>
		  
		  
		  <div class='weight_input_div'>
		  <label class='weight_input_label'>Weight</label>
				<select name="weight_select" id="weight_select" class='weight_input'>
                  <option>50</option>
				  <option>51</option>
				  <option>52</option>
				  <option>53</option>
				  <option>54</option>
				  <option>55</option>
				  <option>56</option>
				  <option>57</option>
				  <option>58</option>
				  <option>59</option>
				  <option>60</option>
				  <option>61</option>
				  <option>62</option>
				  <option>63</option>
				  <option>64</option>
				  <option>65</option>
				  <option>66</option>
				  <option>67</option>
				  <option>68</option>
				  <option>69</option>
				  <option>70</option>
				  <option>71</option>
				  <option>72</option>
				  <option>73</option>
				  <option>74</option>
				  <option>75</option>
				  <option>76</option>
				  <option>77</option>
				  <option>78</option>
				  <option>79</option>
				  <option>80</option>
				  <option>81</option>
				  <option>82</option>
				  <option>83</option>
				  <option>84</option>
				  <option>85</option>
				  <option>86</option>
				  <option>87</option>
				  <option>88</option>
				  <option>89</option>
				  <option>90</option>
				  <option>91</option>
				  <option>92</option>
				  <option>93</option>
				  <option>94</option>
				  <option>95</option>
				  <option>96</option>
				  <option>97</option>
				  <option>98</option>
				  <option>99</option>
				  <option>100</option>
                </select>
		  </div>
		  
		<div class='height_input_div'>
		<label class='height_input_label'>Hight</label>
		<select name="height_select_foot" id="height_select" class='height_first_input'>
					
		 <option>2 </option>
		 <option>3 </option>
		 <option>4 </option>
		  <option>5</option>
		  <option>6</option>
		   <option>7</option>
		 </select>
		 <label class='feet_input_label'>Foot</label>
		 <select name="height_select_inches" id="height_select" class='height_second_input'>
					 <option>1</option>
		 <option>2</option>
		 <option>3</option>
		 <option>4</option>
		  <option>5</option>
		  <option>6</option>
		  <option>7</option>
		  <option>8</option>
		  <option>9</option>
		  <option>10</option>
		  <option>11</option>
		  <option>12</option>
		 </select>
		 <label class='feet_input_label'>Inches</label>
		 
		</div>
			  
		  <div class='height_input_div'>
		  <label class='height_input_label'>Educational Status</label>
				<select name="edu_select" id="edu_select" class='height_first_input'>
                
				 <option>SSC</option>
				 <option>HSC</option>
				 <option>BSC/DEGREE</option>
				  <option>MSC/MBA</option>
				  <option>PHD</option>
				 </select>
		</div>
		  
		<div class='name_div'>
            <label class="name_label">Present Address</label>
			<input required="required" class='name_input' id='present_add' name='present_add'  placeholder='Enter-Your-Present-Address' type='text'>
        </div>

		 <div class='name_div'>
            <label class="name_label">Permanent Address</label>
			<input required="required" class='name_input' id='permanet_add' name='permanent_add'  placeholder='Enter-Your-Permanent-Address' type='text'>
        </div>
		 <div class='phone_div'>
            <label class="phone_label">Phone Number</label>
			<input required="required" class='phone_input' id='phone' name='phone'  placeholder='Enter-Your Phone Number' type='phone'>
          </div>
		  
		<div class='phsical_div'>
            <label class="phsical_label">Physical Illness</label>
			<input required="required" class='phsical_input' id='phsical_ill' name='phsical_ill'  placeholder='If-You-have-any-physical-illness' type='text'>
        </div>
		  <div class='name_div'>
          <label class="name_label"><u>Paying slip/ ID card</u> </label>
		  <input  required="required" style="margin-left:150px" type='file' name="paying_slip"/>
		 </div><br>
		  

          <div class='form-group'>
            <div class='col-md-offset-4 col-md-4'>
              <button class='reg_button' id='btnSubmit' type='submit'>Register</button><br><br>
            </div>
          </div>
        </form>
		<hr size="5" width:40% >
		<hr size="5" width:40% >
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