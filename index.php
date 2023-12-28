<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Online Feedback System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- You may need to update the Bootstrap version based on your project's requirements -->
    <style>
        /* Add your custom styles here */

        /* Updated navigation bar styles */
        nav.navbar {
            background-color: #3498db; /* Updated background color */
            border: none; /* Remove border */
            border-radius: 0; /* Remove border radius */
        }

        .navbar-brand {
            color: #ffffff !important; /* Brand text color */
        }

        .navbar-nav > li > a {
            color: #ffffff !important; /* Nav link text color */
        }

        .navbar-nav > li > a:hover,
        .navbar-nav > li > a:focus {
            background-color: #2980b9; /* Nav link hover color */
        }

        .navbar-toggle {
            border-color: #ffffff; /* Toggle button border color */
        }

        .navbar-toggle:hover,
        .navbar-toggle:focus {
            background-color: #2980b9; /* Toggle button hover color */
        }

        .navbar-collapse {
            border: none; /* Remove border */
        }

        .navbar-nav > li > a,
        .navbar-nav > li > a:hover,
        .navbar-nav > li > a:focus {
            border-bottom: 2px solid transparent; /* Remove bottom border on nav links */
        }
    </style>

</head>

<body>

   <!-- Navigation -->
   <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Online Feedback System</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?info=about">About</a></li>
                    <li><a href="index.php?info=registration">Registration</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?info=login">User</a></li>
                            <li><a href="index.php?info=faculty_login">Police</a></li>
                            <li><a href="admin">Admin</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?info=contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Your PHP code goes here -->

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		<!-- Slider Start -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="item active">
            <div class="fill" style="background-image:url('images/img1.jpg');"></div>
            <div class="carousel-caption">
                <!-- Add any captions or content for the first slide here -->
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="item">
            <div class="fill" style="background-image:url('images/img4.jpeg');"></div>
            <div class="carousel-caption">
                <!-- Add any captions or content for the second slide here -->
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="item">
            <div class="fill" style="background-image:url('images/img3.jpg');"></div>
            <div class="carousel-caption">
                <!-- Add any captions or content for the third slide here -->
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</header>
<!-- Slider End -->
		
	
	
   <!-- Page Content -->
<div class="container">

<div class="row">
    <div class="col-lg-12">

        <div class="col-sm-10" style="margin-top: 60px; margin-bottom: 80px;">
            <h2>About Police Feedback System</h2>
            <p><b>Your Voice Matters:</b> Shaping a Safer Community Together</p>

            <p>Building trust and fostering a strong relationship between the police and the community is at the heart of everything we do.</p>
            <p>Your feedback is essential in helping us achieve this goal and continuously improve the quality of service we provide.</p>
            <p>We encourage you to share your experiences, both positive and negative, through our Police Feedback System.</p>

            <ul>
                <li>Provide feedback on your interactions with our officers.
                    <ul>
                        <li>Did they respond promptly?</li>
                        <li>Were they courteous and professional?</li>
                    </ul>
                </li>
                <li>Report concerns about specific incidents or issues.</li>
                <li>Share your insights on how we can better address community needs and prevent crime.</li>
                <li>Offer suggestions for improvement.
                    <ul>
                        <li>We value your ideas on how we can enhance our services and make our community safer for everyone.</li>
                    </ul>
                </li>
            </ul>

            <p>Your feedback is anonymous and will be used to identify areas for improvement, track progress, and ensure that we are meeting your expectations.</p>

            <p>Together, we can build a stronger, safer community based on mutual respect and understanding.</p>

            <p><a href="link-to-police-feedback-system">Click here to access the Police Feedback System.</a></p>

            <p>We appreciate your time and commitment to making our community a better place.</p>

            <div class="additional-features">
                <h3>Additional Features:</h3>
                <ul>
                    <li>Consider including a brief testimonial from a satisfied community member about their positive experience using the feedback system.</li>
                    <li>Add links to other relevant resources, such as information on crime prevention tips, reporting procedures, and community outreach programs.</li>
                    <li>Ensure the website is accessible and user-friendly for all, regardless of technical ability.</li>
                </ul>
            </div>
        </div>

    </div>
</div>
</div>

				<?php } ?>
            </div>
            
    </div>
    <!-- /.container -->
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#66CCFF">
		<span style="color:#FFFFFF">Developed By	<a href="#">Team DevElites</a> </span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
