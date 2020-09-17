<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','hamaramu_staqbil');
define('DB_PASS' ,'founders2016');
define('DB_NAME', 'hamaramu_db');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
    // echo "chlgyaaa";
    // echo "ayaya under";
    if (isset($_POST['submito'])) {
        if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['subject']) and !empty($_POST['message'])) {

            $email = $_POST['email'];
            // Remove all illegal characters from email 
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            // Validate Email 
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // echo("$email is a valid email address");
                $name = $_POST['name'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                $query = "INSERT INTO contact (id,Name,Subject,Email,Message) VALUES (NULL,'$name','$subject','$email','$message')";
                $sql = mysqli_query($con, $query) or die("Query Unsuccessful Retry ");

                if ($sql) {
                    $_SESSION['success_msg'] = "Contact Details Sent Successfully!!!";
                }
            } else {
                $_SESSION['email_msg'] = "Please Re-check your Email Format";
            }
        } else {
            $_SESSION['empty_msg'] = "Please Fill In all the Fields!";
        }
    }
?>

    <!doctype html>
    <html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>HAMARA MUSTAQBIL</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/gijgo.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    </head>

    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


        <!-- header-start -->
        <header>
            <div class="header-area ">
                <div class="header-top_area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-md-12 col-lg-8">
                                <div class="short_contact_list">
                                    <ul>
                                        <!-- <li><a href="#"> <i class="fa fa-phone" style="color:blue"></i> +92 323 2486043</a></li> -->
                                        <li><a href="#"> <i class="fa fa-envelope" style="color:green"></i>executivecouncil@hamaramustaqbil.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-lg-4">
                                <div class="social_media_links d-none d-lg-block">
                                <a href="https://www.facebook.com/HamaraMustakbil/">
                                    <i class="fa fa-facebook" style="color:#3b5998"></i>
                                </a>
                                <a href="https://www.instagram.com/hamaramustaqbil/?hl=en">
                                    <i class="fa fa-instagram" style="color:red"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/hamara-mustaqbil">
                                    <i class="fa fa-linkedin" style="color:#0e76a8"></i>
                                </a>
                                <a href="https://twitter.com/hmustaqbil?s=11">
                                    <i class="fa fa-twitter" style="color:#00acee"></i>
                                </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sticky-header" class="main-header-area">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/LOGO1.png" style="width:250px;height:80px;" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">home</a></li>
                                            <li><a href="About.php">About Us</a></li>
                                            <li><a href="#">What We Do <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="Operations.php">Operations Department</a></li>
                                                    <li><a href="Outreach.php">Outreach</a></li>
                                                    <li><a href="SchoolHealth.php">School Health</a></li>
                                                    <li><a href="MentalHealth.php">Mental Health</a></li>
                                                    <li><a href="Research.php"> Research and Development</a></li>
                                                    <li><a href="Media.php"> Media and Publication</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="Event.php">Events</a></li>
                                            <li><a href="Cause.php">Cause</a></li>
                                            <li><a href="Team.php">Team</a></li>
                                            <li><a href="Contact.php">Contact Us</a></li>

                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#">Make a Donate</a>
                                    </div>
                                </div> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- header-end -->

        <!-- bradcam_area_start  -->
        <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center" style=" background-image: url(img/cover2.png);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>Contact Us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bradcam_area_end  -->
        <div class="whole-wrap">
            <div class="container box_1170">
                <div class="section-top-border">
                    <h3>We’re here to help!</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <blockquote class="generic-blockquote" style="font-family: 'Poppins', sans-serif;">

                                If you have any queries regarding Hamara Mustaqbil and its associated departments, wish to contribute and donate to our cause, or would like to hold a workshop, feel free to contact us through the channels provided below.

                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">


                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <?php
                        if (isset($_SESSION['email_msg'])) {
                            echo '<div class="alert alert-danger">
                                        <strong>' . $_SESSION["email_msg"] . '</strong>
                                    </div>';
                            unset($_SESSION["email_msg"]);
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['success_msg'])) {
                            echo '<div class="alert alert-success">
                                        <strong>' . $_SESSION["success_msg"] . '</strong>
                                    </div>';
                            unset($_SESSION["success_msg"]);
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['empty_msg'])) {
                            echo '<div class="alert alert-warning">
                                        <strong>' . $_SESSION["empty_msg"] . '</strong>
                                    </div>';
                            unset($_SESSION["empty_msg"]);
                        }
                        ?>
                        <form class="form-contact contact_form" action="Contact.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn" name="submito">
                                    Send
                                </button>
                                <!-- <div>
                                    <button type="submit" name="submit" class="btn">Add</button>
                                </div> -->
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Karachi, Pakistan</h3>
                                <!-- <p>Dow Medical College</p> -->
                            </div>
                        </div>
                        <!-- <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+92 323 2486043</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div> -->
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <!-- <h5>executivecouncil@hamaramustaqbil.com</h5> -->
                                <h3>Send us your query anytime!</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->

        <!-- footer_start  -->
        <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 col-lg-4 ">
                            <div class="footer_widget">
                                <div class="footer_logo">
                                    <a href="#">
                                        <img src="img/LOGO1.png" style="width:250px;height:80px;" alt="">
                                    </a>
                                </div>
                                <p class="address_text">Hamara Mustaqbil is a non profit organization initiated by 4 students of Dow Medical College that strives
                                    towards the holistic development of our youth through the most powerful tool at hand; education .
                                </p>
                                <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/HamaraMustakbil/">
                                            <i class="fa fa-facebook" style="color:blue"></i>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/hamaramustaqbil/?hl=en">
                                            <i class="fa fa-instagram" style="color:red"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/hamara-mustaqbil">
                                            <i class="fa fa-linkedin" style="color:#0e76a8"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/hmustaqbil?s=11">
                                            <i class="fa fa-twitter" style="color:#00acee"></i>
                                        </a>
                                    </li>
                                </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    The Cause
                                </h3>
                                <ul class="links">
                                    <li>Donate</li>
                                    <li>Workshops</li>
                                    <li>Volunteer</li>
                                    <!-- <li><a href="#">Partner</a></li>
                                <li><a href="#">Jobs<</li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Contacts
                                </h3>
                                <div class="contacts">
                                    <p>
                                        executivecouncil@hamaramustaqbil.com<br>
                                        Karachi, Pakistan
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Top News
                            </h3>
                            <ul class="news_links">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African 
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African 
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="row">
                        <div class="bordered_1px "></div>
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> Humara Mustataqbil, All rights reserved</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </p>
                            <p class="copy-right_text"><a href="sitedevelopers.php">Site Developers</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer_end  -->

        <!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/gijgo.min.js"></script>

        <!--contact js-->
        <!-- <script src="js/contact.js"></script> -->
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>

        <script src="js/main.js"></script>
        <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                    rightIcon: '<span class="fa fa-caret-down"></span>'
                }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                    rightIcon: '<span class="fa fa-caret-down"></span>'
                }

            });
        </script>
    </body>

    </html>

<?php
}
?>