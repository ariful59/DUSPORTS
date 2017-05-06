<?php
if (!isset($_SESSION)) {
    session_start();
}
//$conn = new mysqli('localhost', 'root', '', 'WebProject');
$conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])) {
    $email = mysqli_real_escape_string($conn, $_GET['email']);
    if(!(empty($email))) {
        ?>

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

            <link rel="stylesheet" href="css/confirm.css">
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
                                .width(200)
                                .height(100)
                            ;
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
            <style>
                hei {
                    height: 500px;
                }

                px {
                    border: 3px solid #525252;
                    box-shadow: 2px 2px 2px #525252;
                    padding: 5px;
                }

                p {
                    margin-left: 100px;
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
                        <li><a href="dusports">HOME</a></li>
                        <li><a href="admissionswimMain.php">SWIMMING</a></li>
                        <li class="active"><a href="admissionswim.">ADMISSION</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">NOTICE<i
                                        class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="scheduleswim">SCHEDULE</a></li>
                                <li><a href="termswim">TERMS & POLICY</a></li>
                                <li><a href="notice">NOTICE BOARD</a></li>
                            </ul>
                        </li>
                        <li><a href="about-us">ABOUT US</a></li>
                        <li><a href="contact-us">CONTACT</a></li>
                        <?php
                            $sql = "SELECT * FROM users where email='$email'";

                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            $username = $row['username'];
                            $_SESSION['loggedin'] = true;
                            $_SESSION['username'] = $username;
                            $_SESSION['email'] = $email;
                            ?>
                            <li class="dropdown">
                                <a href="signLog" class="dropdown-toggle" data-toggle="dropdown">
                                    <px><?php echo $username ?></px>
                                    <i class="icon-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="logout">Logout</a></li>
                                </ul>
                            </li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- Page Title -->
        <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <center><h1>Please sumbit the payin slip and finish your admission for swimming pool.</h1>
                        </center>
                    </div>
                </div>
            </div>
        </div>


        <div class='fullFormcon'>
            <div class='panel panel-primary dialog-panel' style='background-color:#dbe8ff'>
                <div class='panel-body'>

                    <form class='form-horizontal' id='form' role='form' action="confirmswimdata" method="POST"
                          enctype="multipart/form-data">
                        <center>
                            <div class='image_pos_con'>
                                <table>
                                    <tr>
                                        <center><img src="img/portfolio/logodu.jpg" height="100" width="80"/></center>
                                    </tr>
                                    <br>
                                    <tr>
                                        <div class='heading_pos'>
                                            <center><b>SWIMMING POOL CENTER</b></br>ADMISSION FORM FOR
                                                SWIMMING-POOL</br>
                                                STUDENTS/TEACHERS/STUFF/OUTSIDER
                                            </center>
                                        </div>
                                    </tr>

                                </table>
                        </center>
                </div>
                <div class='subject_div'>
                    <label class="designation_label"><u>Please Submit the paying slip for Swimming pool admission.</u>
                    </label>
                </div>
                <br><br>
                <table>
                    <tr>
                        <div class='heading_pos'>
                            <center><input type='file' name="image" onchange="readURL(this);"/></center>
                            <center><img id="blah"/></center>
                        </div>
                    </tr>
                </table>
                <br>

                <div class='form-group'>
                    <div class='col-md-offset-4 col-md-4'>
                        <button class='reg_button' id='btnSubmit' type='submit'>Register</button>
                        <br><br>
                    </div>
                </div>
                <br><br><br><br>
                </form>
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
                        <div class="footer-copyright">&copy; 2017 <a href="">Dhaka University</a> Sports. By <a
                                    href="https://www.facebook.com/arifulaminrumi">Ariful Amin &</a>
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
        <?php
    }
    }
    ?>