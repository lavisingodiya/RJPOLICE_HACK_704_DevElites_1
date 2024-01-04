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
<!-- /.row -->

<!-- Intro Content -->
<div class="row" style="margin-bottom:50px;margin-left:50px">

    <h2>Key Features</h2>

    <b>Police Station Feedback:</b> Users provide feedback on their interactions with police stations.<br>
    <b>User Roles:</b> Administrator and User<br>
    <h3>Administrator Responsibilities</h3>

    Manage user accounts: Create, update, and delete user accounts.<br>
    Analyze feedback results: Analyze feedback data to identify trends and areas for improvement.<br>
    Generate reports: Generate comprehensive reports on feedback findings.<br>
    <h3>User Responsibilities</h3>

    Provide feedback on specific police stations: Select a police station from a list and rate their experience on
    various aspects such as professionalism, responsiveness, and helpfulness.<br>
    Offer comments or suggestions: Provide optional comments or suggestions to further elaborate on their feedback.<br>
    View feedback history: Access and review their own past feedback entries.<br>
    <h3>Prerequisites</h3>

    Database setup: Create the "feedback" database with "users," "stations," and "interactions" tables before using the
    PHP code.<br>
    <h3>Next Steps</h3>

    Review PHP code: Provide the PHP code for review and implementation guidance.<br>
    Optimize database structure: Review the database structure for clarity and optimization.<br>
    Implement security measures: Address security considerations, such as input validation and user authentication.<br>
    Incorporate additional features:
    Allow users to filter and search feedback records.
    Implement an anonymous feedback option.
    Integrate with communication channels for follow-up with users.

</div>
</div>
<!-- /.row -->
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
<!-- Footer -->