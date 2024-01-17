<?php
session_start();
require('dbconfig.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Police Feedback | Rajasthan Police</title>
    <link rel="icon" href="Content/images/favicon.ico" type="image/x-icon">
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/lib/font-awesome/css/all.min.css" rel="stylesheet" />
    <link href="Content/css/StyleSheet.css" rel="stylesheet" />
    <link href="Content/lib/sweetalert/sweetalert.css" rel="stylesheet" />



    <script>
        function myFunction() {
            document.getElementById('modalOverlay').style.display = 'none'
        }
    </script>

    <style>
    </style>

</head>


<body>

    <?php
    @$info = $_GET['info'];
    if ($info != "") {

        if ($info == "about") {
            include('about.php');
        } else if ($info == "contact") {
            include('contact.php');
        } else if ($info == "login") {
            include('login.php');
        } else if ($info == "faculty_login") {
            include('faculty_login.php');
        } else if ($info == "registration") {
            include('registration.php');
        }
    } else {
    ?>



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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Content/images/1080x360.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/rjbaner.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/bannerfinal.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Render Section -->
        <div id="container">
            <a name="skipcontent" id="skipcontent"></a>




            <!-- SCETION SMART POLICING -->
            <div class="container-fluid my-4">
                <div class="row">

                    <div class="col-10 mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/banner_digital2.png" alt="Image" class="img-fluid Radius py-2" />
                            </div>
                            <div class="col-md-6 ScroolDiv" style="text-align: justify; text-justify: inter-word;">
                                <h3 class="text-center text-blue py-3">IMPORTANT DOCUMENTS</h3>
                                <div class="row justify-content-center gap-4">
                                    <div class="col-lg-3 w-27 col-md-5 " title="CyberSecurity">
                                        <a href="https://police.rajasthan.gov.in/uploads/Tips_for_Cyber_Security_19fdadb7de.pdf" target="_blank" onclick="return confirm('This Service is available for authorized users only. To Continue click ok, to cancel click cancel');" class="shadow-lg  bg-white text-center rounded text-decoration-none d-block">
                                            <img src="images/cyber.png" class="img-fluid w-50 py-2" />
                                            <p class="text-main fw-bold mb-0 pb-2 text-12">साइबर सुरक्षा के लिए टिप्स</p>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 w-27 col-md-5 " title="ForigenInstructns">
                                        <a href="https://police.rajasthan.gov.in/uploads/Tips_For_Foreigners_695a39495d.pdf" target="_blank" class="shadow-lg  bg-white text-center rounded text-decoration-none d-block" onclick="return confirm('This Service is available for authorized users only. To Continue click ok, to cancel click cancel');">
                                            <img src="images/forigen.png" class="img-fluid w-40 py-2" />
                                            <p class="text-main fw-bold mb-0 pb-2 text-12">विदेशियों के लिए दिशा-निर्देश</p>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 w-27 col-md-5 " title="LocalPeopleTips">
                                        <a href="https://police.rajasthan.gov.in/uploads/Tips_for_Local_Residents_Women_1c1ab3e22b.pdf" target="_blank" class="shadow-lg  bg-white text-center rounded text-decoration-none d-block" onclick="return confirm('This Service is available for authorized users only. To Continue click ok, to cancel click cancel');">
                                            <img src="images/local.png" class="img-fluid w-50 py-2" />
                                            <p class="text-main fw-bold mb-0 pb-2 text-12">स्थानीय निवासियों/महिलाओं के लिए टिप्स</p>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 w-27 col-md-5 " title="OldPeople">
                                        <a href="https://police.rajasthan.gov.in/uploads/Tips_For_Senior_Citizens_ce4c651155.pdf" target="_blank" class="shadow-lg  bg-white text-center rounded text-decoration-none d-block" onclick="return confirm('This Service is available for authorized users only. To Continue click ok, to cancel click cancel');">
                                            <img src="images/old.png" class="img-fluid w-75 py-2" />
                                            <p class="text-main fw-bold mb-0 pb-2 text-12">वरिष्ठ नागरिकों के लिए युक्तियाँ</p>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 w-27 col-md-5 " title="TouristsTips">
                                        <a href="https://police.rajasthan.gov.in/uploads/Tips_For_Tourists_8f2c0c5477.pdf" target="_blank" class="shadow-lg  bg-white text-center rounded text-decoration-none d-block" onclick="return confirm('This Service is available for authorized users only. To Continue click ok, to cancel click cancel');">
                                            <img src="images/tourist.png" class="img-fluid w-40 py-2" />
                                            <p class="text-main fw-bold mb-0 pb-2 text-12" style="margin-top:10px!important;">पर्यटकों के लिए टिप्स</p>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 w-27 col-md-5 " title="ForigenPeopleTips">
                                        <a href="https://police.rajasthan.gov.in/uploads/Foreigners_Tips_1205a9b6ae.pdf" target="_blank" class="shadow-lg  bg-white text-center rounded text-decoration-none d-block" onclick="return confirm('This Service is available for authorized users only. To Continue click ok, to cancel click cancel');">
                                            <img src="images/foreignpeople.png" class="img-fluid w-75 py-2 w-m-27" />
                                            <p class="text-main fw-bold mb-0 pb-2 text-12">विदेशियों के लिए टिप्स</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SCETION POLICY SCETION POLICY -->
            <div class="container-fluid my-4">
                <div class="row">

                    <div class="col-10 mx-auto">
                        <div class="row">


                            <!-- SERVICES FOR CITIZEN -->
                            <div class="col-md-5">

                                <div class="Public-policy">
                                    <h3 class="text-main">PROCESS OF FILING AN FIR</h3>
                                    <h5 class="text-main">⭐ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;एफआईआर दर्ज करने की प्रक्रिया</h5>
                                    <a class="d-block">
                                        <i class="fa fa-pen-square me-2 text-main"></i><b>पुलिस स्टेशन से संपर्क करें:</b>

                                        चाहे अपराध कहीं भी हुआ हो, निकटतम पुलिस स्टेशन पर जाएँ। आप "भारतीय पुलिस आपके कॉल पर" ऐप का उपयोग करके आस-पास के स्टेशन ढूंढ सकते हैं।
                                    </a>

                                    <a class="d-block">
                                        <i class="fa fa-pen-square me-2 text-main"></i><b>ड्यूटी ऑफिसर से मिलें:</b>

                                        ड्यूटी पर तैनात अधिकारी को अपनी स्थिति स्पष्ट करें। अपराध की प्रकृति और यह कब/कहां हुआ, इसके बारे में स्पष्ट और संक्षिप्त रहें।

                                    </a>
                                    <a class="d-block">
                                        <i class="fa fa-pen-square me-2 text-main"></i> <b>अपराध का विवरण प्रदान करें:</b>

                                        घटना को कालानुक्रमिक रूप से बताएं, जिसमें संदिग्धों, गवाहों और उपलब्ध साक्ष्य जैसे विवरण शामिल हों। यदि आप पहले से तैयार हैं तो आप एक लिखित शिकायत प्रदान कर सकते हैं।

                                    </a>
                                    <a class="d-block">
                                        <i class="fa fa-pen-square me-2 text-main"></i> <b> एफआईआर पंजीकरण:</b>

                                        अधिकारी आपकी शिकायत को स्टेशन की दैनिक डायरी (डीडी)/जनरल डायरी (जीडी) में दर्ज करेगा। यदि अपराध संज्ञेय है (जैसे, चोरी, हमला), तो तुरंत एफआईआर दर्ज की जानी चाहिए। गैर-संज्ञेय अपराधों के लिए, अधिकारी एफआईआर दर्ज करने से पहले प्रारंभिक जांच कर सकता है।

                                    </a>
                                    <a class="d-block">
                                        <i class="fa fa-pen-square me-2 text-main"></i> <b>एफआईआर सामग्री:</b>

                                        एफआईआर में आपका नाम, पता, अपराध की प्रकृति, तारीख/समय/स्थान और संदिग्धों/गवाहों का विवरण जैसे विवरण शामिल होंगे। आपको अपने रिकॉर्ड के लिए एफआईआर की एक प्रति प्राप्त करने का अधिकार है।

                                    </a>

                                    <div class="mb-3 d-flex align-items-center">
                                        <span class="field-validation-valid text-danger" data-valmsg-for="State" data-valmsg-replace="true"></span>
                                    </div>

                                    <a class="d-block">
                                        <i class="fa fa-pen-square me-2 text-main"></i><b> अतिरिक्त बिंदु:</b>

                                        आप मौखिक या लिखित रूप से एफआईआर दर्ज कर सकते हैं।<br>
                                        - यदि पुलिस एफआईआर दर्ज करने से इनकार करती है, तो आप किसी वरिष्ठ अधिकारी से संपर्क कर सकते हैं या मजिस्ट्रेट के पास शिकायत दर्ज करा सकते हैं।<br>
                                        - आप कुछ राज्यों में विशिष्ट अपराधों के लिए ऑनलाइन एफआईआर भी दर्ज कर सकते हैं।
                                    </a>

                                </div>
                            </div>
                            <!-- SERVICES FOR POLICE -->
                            <div class="col-md-7 bg-img">
                                <img src="images/bannerll.png" alt="Image" class="img-fluid Radius py-2" />
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>



        </div>

        <!-- SLIDER SLIDER -->
        <div class="container-fluid px-0">
            <section class="company_logo_slides">
                <div class="containerSLider">
                    <div id="clients">
                        <div class="clients-wrap">

                            <ul id="clients-list" class="">

                                <li>
                                    <a class="text-decoration-none" href='https://twitter.com/PoliceRajasthan' target="_blank">
                                        <div>
                                            <img src="images/x.png" alt="Logo" />
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a class="text-decoration-none" href='https://www.instagram.com/PoliceRajasthan/' target="_blank">
                                        <div>
                                            <img src="images/instagram.png" alt="Logo" />
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a class="text-decoration-none" href='https://www.facebook.com/PoliceRajasthan/' target="_blank">
                                        <div>
                                            <img src="images/facebook.png" alt="Logo" />
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a class="text-decoration-none" href='https://www.youtube.com/channel/UCWfOt35Rs1HvGDMo5J-jwcg' target="_blank">
                                        <div>
                                            <img src="images/youtube.png" alt="Logo" />
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a class="text-decoration-none" href='https://twitter.com/RajPoliceHelp' target="_blank">
                                        <div>
                                            <img src="images/x.png" alt="Logo" />
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-decoration-none" href='https://police.rajasthan.gov.in/new/dashboard' target="_blank">
                                        <div>
                                            <img src="images/rjlogox.png" alt="Logo" />
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </section>

        </div>




        <!-- FOOTER -->
        <div class="container-fluid Copyright text-center">

            <small class="text-white">
                &copy; Created with ❤️ from team DevElites
                <a href='https://github.com/lavisingodiya/RJPOLICE_HACK_704_DevElites_1' class="btn btn-warning ms-2 pb-0 pt-0" style="background-color: #f0941e !important; border-color: #f0941e !important;"><b>Visit Us
                    </b></a>
            </small>
        </div>
        </footer>


        <!-- MODAL MODAL -->



        <script src="Scripts/bootstrap.bundle.min.js"></script>
        <script src="Content/js/jquery3.7.0.min.js"></script>
        <script src="Content/lib/font-awesome/js/all.min.js"></script>
        <script src="Content/lib/sweetalert/sweetalert.min.js"></script>

        <script>
            $(document).ready(function() {
                debugger

                $(".navbar-nav  li a ").click(function() {
                    var id = $(this);

                    $(".navbar-nav li a").removeClass("active");
                    $(id).addClass("active");
                    sessionStorage.setItem("mylink", $(id).text());
                });

                var mylink = sessionStorage.getItem('mylink');

                if (mylink !== null && mylink !== "Home") {
                    $("li a:contains('" + "Home" + "')").removeClass("Navactive");

                    $("li a:contains('" + mylink + "')").addClass("Navactive");

                } else {
                    let id = "Home"
                    $(id).addClass("Navactive");
                }
            });

            //if (mylink !== null) {

            //    $("li a:contains('" + mylink + "')").addClass("Navactive");
            //} else {
            //    let id = "Home"
            //    $(id).addClass("Navactive");
            //}


            // zoom in or outDPPVideo
            var $affectedElements = $("p, a, li, span, h1, h2, h3, h4, h5, h6"); // Can be extended, ex. $("div, p, span.someClass")

            // Storing the original size in a data attribute so size can be reset
            $affectedElements.each(function() {
                var $this = $(this);
                $this.data("orig-size", $this.css("font-size"));
            });

            $("#iFont").click(function() {
                changeFontSize(1);
            })

            $("#dFont").click(function() {
                changeFontSize(-1);
            })

            $("#rFont").click(function() {
                $affectedElements.each(function() {
                    var $this = $(this);
                    $this.css("font-size", $this.data("orig-size"));
                });
            })

            function changeFontSize(direction) {
                $affectedElements.each(function() {
                    var $this = $(this);
                    $this.css("font-size", parseInt($this.css("font-size")) + direction);
                });
            }



            /*  SLIDER SCRIPT*/
            $(function() {
                var $clientcarousel = $('#clients-list');
                var clients = $clientcarousel.children().length;
                var clientwidth = (clients * 250); // 140px width for each client item
                $clientcarousel.css('width', clientwidth);

                var rotating = true;
                var clientspeed = 0;
                var seeclients = setInterval(rotateClients, clientspeed);

                $(document).on({
                    mouseenter: function() {
                        rotating = false; // turn off rotation when hovering
                    },
                    mouseleave: function() {
                        rotating = true;
                    }
                }, '#clients');

                function rotateClients() {
                    if (rotating != false) {
                        var $first = $('#clients-list li:first');
                        $first.animate({
                            'margin-left': '-220px'
                        }, 5000, "linear", function() {
                            $first.remove().css({
                                'margin-left': '0px'
                            });
                            $('#clients-list li:last').after($first);
                        });
                    }
                }
            });
        </script>

    <?php } ?>

    <script>
        $('#ddlState').on('change', function(e) {

            var state = $(this).find(":checked").text();
            console.log(state);

            $.ajax({
                type: 'Post',
                url: '/DigitalPolice/GetUrlByState',
                contentType: "application/json; charset=utf-8",
                data: JSON.stringify({
                    'state': state
                }),
                success: function(data) {
                    if (data.length != 0) {
                        if (confirm("You are being redirected to State Citizen Portal. To continue click Continue. To cancel click Cancel.") == true) {

                            // var url = data;
                            // console.log(url);
                            // alert(url);
                            // window.open(url, '_blank');
                            e.preventDefault();
                            var url = data;
                            window.open(url);

                        }
                    }

                },
                failure: function() {
                    location.reload(true);
                }
            });
        });
    </script>


</body>

</html>