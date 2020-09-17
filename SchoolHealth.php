<?php
include('config.php');
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
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center" style=" background-image: url(img/SH1.JPG);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>School Health</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- popular_causes_area_start  -->
    <div class="popular_causes_area pt-120 cause_details ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="single_cause">
                        <div class="thumb">
                            <!-- <img src="img/causes/large_img.png" alt=""> -->
                        </div>
                        <div class="causes_content">
          
                            <!-- <div class="balance d-flex justify-content-between align-items-center">
                                <span>Raised: $5000.00 </span>
                                <span>Goal: $9000.00 </span>
                            </div> -->
                            <h4>Overview</h4>
                            <?php
                                $ret=mysqli_query($con,"select * from school where id = (select max(id) as pid from school)");
                                $num=mysqli_num_rows($ret);
                                if($num>0)
                                {
                                    $row=mysqli_fetch_array($ret);
                            ?>
                            <p style=" word-wrap: break-word;white-space: pre-wrap;"><?php echo htmlentities($row['Overview']);?></p>
                            <?php } else { ?>
                                    <div class="col-lg-4 col-md-6">
                                        <p>No Overview Found</p>
                                    </div>
                            <?php } ?>
                        </div>
                        <div class="causes_content">
                            <div class="custom_progress_bar">
                                <div class="progress">
                                    <!-- <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <span class="progres_count">
                                            30%
                                        </span>
                                    </div> -->
                                </div>
                            </div>
                            <!-- <div class="balance d-flex justify-content-between align-items-center">
                                <span>Raised: $5000.00 </span>
                                <span>Goal: $9000.00 </span>
                            </div> -->
                            <h3>How do I become a member?</h3>
                            <?php
                            if($num>0)
                                {
                            ?>
                            <p style=" word-wrap: break-word;white-space: pre-wrap;"><?php echo htmlentities($row['Member']);?></p>
                            <?php } else { ?>
                                    <div class="col-lg-4 col-md-6">
                                        <p>No Description Found</p>
                                    </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h3>The skills and training workshop</h3>
                <?php
                if($num>0)
                    {
                ?>
                <div class="row gallery-item">
                    <div class="col-md-4">
                        <a href="admin/schoolimage/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['EventImage']);?>" class="img-pop-up">
                           
                          
                            <div class="single-gallery-image" style="background: url(admin/schoolimage/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['EventImage']);?>);"></div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="admin/schoolimage/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['EventImage2']);?>" class="img-pop-up">
                           
                          
                            <div class="single-gallery-image" style="background: url(admin/schoolimage/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['EventImage2']);?>);"></div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="admin/schoolimage/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['EventImage3']);?>" class="img-pop-up">
                           
                          
                            <div class="single-gallery-image" style="background: url(admin/schoolimage/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['EventImage3']);?>);"></div>
                        </a>
                    </div>
                </div>
                <?php } else { ?>
                        <div class="col-lg-4 col-md-6">
                            <p>No Images Found</p>
                        </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- popular_causes_area_end  -->


    <!-- <div class="make_donation_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Make a Donation</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="#" class="donation_form">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="single_amount">
                                    <div class="input_field">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">$</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="40,200" aria-label="Username" aria-describedby="basic-addon1">
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="single_amount">
                                   <div class="fixed_donat d-flex align-items-center justify-content-between">
                                       <div class="select_prise">
                                           <h4>Select Amount:</h4>
                                       </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="blns_1" name="radio-group" checked>
                                            <label for="blns_1">10</label>
                                        </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="blns_2" name="radio-group" checked>
                                            <label for="blns_2">30</label>
                                        </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="Other" name="radio-group" checked>
                                            <label for="Other">Other</label>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="donate_now_btn text-center">
                        <a href="#" class="boxed-btn4">Donate Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div> -->

    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/LOGO1.png" style="width:250px;height:80px;"alt="">
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
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>  Humara Mustataqbil, All rights reserved</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                        <p class="copy-right_text"><a href="sitedevelopers.php">Site Developers</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- link that opens popup -->

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
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>