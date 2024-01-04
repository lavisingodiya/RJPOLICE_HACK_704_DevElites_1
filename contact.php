<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand d-flex" href="index.php">
            <img src="images/rjlogo.png" alt="Emblem image" />
            <div class="ms-1">
                <h4>Rajasthan</h4>
                <h4>Police</h4>
            </div>
        </a>

        <img src="images/rjlogo2.png" alt="G-20 Logo" class="G20-logo" style="width: 9%;" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link Navactive" id="Home" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="About" href="index.php?info=about">About</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?info=registration" id="Service" class="nav-link">Registration</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?info=login" id="Service" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?info=faculty_login" id="Service" class="nav-link">Station Login </a>
                </li>
                <li class="nav-item">
                    <a href="admin" id="Service" class="nav-link">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?info=contact" id="Contact" class="nav-link">Contact</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<?php
include('dbconfig.php');
extract($_POST);
if (isset($save)) {

    mysqli_query($conn, "insert into contact values('','$n','$m','$e','$msg',now())");

    $err = "<font color='green'>Admin Will Contact you soon</font>";

}

?>

<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">

            <ol class="breadcrumb">

                </li>

            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-8">
            <h3>
                <font color="#00FF33">Contact us </font>
            </h3>
            <form name="sentMessage" method="post" id="contactForm" novalidate>
                <?php echo @$err; ?>
                <div class="control-group form-group">


                    <div class="controls">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="n" required
                            data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Mobile Number:</label>
                        <input type="number" class="form-control" name="m" required
                            data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" name="e" required
                            data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea rows="10" name="msg" cols="100" class="form-control" id="message" required
                            data-validation-required-message="Please enter your message" maxlength="999"
                            style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" name="save" class="btn btn-primary">Send Message</button>
                <h1></h1>
            </form>
        </div>
        <div class="col-md-4" style="margin-top:30px">
            <h3>Contact Details</h3>
            <p>
                ISI - 2, Poornima Marg, Sitapura<br>Jaipur, Rajasthan 302022<br>
            </p>
            <p><i class="fa fa-phone"></i>
                <abbr title="Phone">P</abbr>: +91 8769045359
            </p>
            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email">E</abbr>: <a href="mailto:lavisaini322@.com">lavisaini322@gmail.com</a>
            </p>
            <p><i class="fa fa-clock-o"></i>
                <abbr title="Hours">H</abbr>: Monday - Sunday: 9:00 AM to 9:00 PM
            </p>
            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                </li>
            </ul>
        </div>
    </div>

</div>

<!-- Contact Details Column -->

<!-- /.row -->

<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<!-- /.row -->



</div>


<!-- FOOTER -->
<div class="container-fluid Copyright text-center">

    <small class="text-white">
        &copy; Created with ❤️ from team DevElites
        <a href='https://github.com/lavisingodiya/RJPOLICE_HACK_704_DevElites_1' class="btn btn-warning ms-2 pb-0 pt-0"
            style="background-color: #f0941e !important; border-color: #f0941e !important;"><b>Visit Us
            </b></a>
    </small>
</div>
</footer>
<!-- /.container -->