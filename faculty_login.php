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
extract($_POST);
if (isset($save)) {

    if ($e == "" || $p == "") {
        $err = "<font color='red'>fill all the fileds first</font>";
    } else {

        $sql = mysqli_query($conn, "select * from faculty where email='$e' and password='$p'");

        $r = mysqli_num_rows($sql);

        if ($r == true) {
            $_SESSION['faculty_login'] = $e;
            header('location:faculty');
        } else {

            $err = "<font color='red'>Invalid login details</font>";

        }
    }
}

?>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">

        <form method="post">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <h2>Station Login Form</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <?php echo @$err; ?>
                </div>
            </div>



            <div class="row" style="margin-top:10px">
                <div class="col-sm-4">Enter YOur Email</div>
                <div class="col-sm-5">
                    <input type="email" name="e" class="form-control" />
                </div>
            </div>

            <div class="row" style="margin-top:10px">
                <div class="col-sm-4">Enter YOur Password</div>
                <div class="col-sm-5">
                    <input type="password" name="p" class="form-control" />
                </div>
            </div>
            <div class="row" style="margin-top:10px">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <input type="submit" value="Login" name="save" class="btn btn-info" />

                </div>
            </div>
        </form>
    </div>
</div>
<p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</p>

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