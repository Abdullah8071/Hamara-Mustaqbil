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
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center"  style=" background-image: url(img/cover2.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>OUR TEAM</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->
    <section>
        <!-- our_volunteer_area_start  -->
        <div class="our_volunteer_area section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center mb-55">
                            <h3><span>Executive Members</span></h3>
                        </div>
                    </div>
                </div>

                <?php
                    $bod_arr = array("President", "General Secretary", "Vice President", "Joint Secretary", "Join Secretary", "Treasurer","Executive Council Member","Mental Health Head","Media Head","Videography Head","Operations Head","Research Head",
                "Outreach Head","School health Head","Finance Head");

                	$cnt = 0;
                	$started = 0;
                    $_SESSION['PEM'] = true;

                	foreach($bod_arr as $position) {
                		$query = "SELECT * FROM team WHERE Category = 'Executive Members' and Designation = '$position'";
            			$result = mysqli_query($con, $query) or die("Error in ".$query."<br>".mysqli_error($con));
                        $num = mysqli_num_rows($result);
                        if($num > 0) {
                            unset($_SESSION['PEM']);
                        }
            			while($row = mysqli_fetch_assoc($result)) {
							if($cnt % 3 == 0) {
		                		echo '<div class="row justify-content-center" style="margin-top: 4%;">';
		                		$started = 1;
		                	} $cnt++;?>
		                	 		<div class="col-lg-4 col-md-6">
				                        <div class="single_volenteer">
				                            <div class="volenteer_thumb">
				                                <img src="admin/memberimage/<?php echo htmlentities($row["id"]);?>/<?php echo htmlentities($row["MemberImage"]);?>" alt=""
				                                    style="border-radius: 200px;width:170px;height:170px;">
				                            </div>
				                            <div class="voolenteer_info d-flex align-items-end">
				                                <div class="social_links">

				                                </div>
				                                <div class="info_inner">
				                                    <h4><?php echo $row["MemberName"]; ?></h4>
				                                    <p><?php echo $row["Designation"]; ?></p>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				            <?php
				            if($cnt % 3 == 2) {
		                		echo '</div>';
		                		$started = 0;
		                	}
		                	$cnt++;  
						}
                	}

                	if($started == 1) {
                		echo '</div>';
                	}

                    if(isset($_SESSION['PEM'])) { ?>
                        <div class="col-lg-5 col-md-6">
                            <p>No Executive Member Found</p>
                        </div>
                    <?php }
                ?>
            </div>
        </div>
        <!-- our_volunteer_area_end  -->





          <!-- our_volunteer_area_start  -->
          <div class="our_volunteer_area section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center mb-55">
                            <h3><span>Associates</span></h3>
                        </div>
                    </div>
                </div>
                <?php
                    $query = "SELECT * FROM team WHERE Category = 'Associates'";
        			$result = mysqli_query($con, $query) or die("Error in ".$query."<br>".mysqli_error($con));
        			$cnt = 0;
        			$started = 0;
                    $_SESSION['PEM'] = true;

                    $num = mysqli_num_rows($result);
                    if($num > 0) {
                        unset($_SESSION['PEM']);
                    }
        			while($row = mysqli_fetch_assoc($result)) {
						if($cnt % 3 == 0) {
	                		echo '<div class="row justify-content-center" style="margin-top: 4%;">';
	                		$started = 1;
	                	} $cnt++;?>
	                	 		<div class="col-lg-4 col-md-6">
			                        <div class="single_volenteer">
			                            <div class="volenteer_thumb">
			                                <img src="admin/memberimage/<?php echo htmlentities($row["id"]);?>/<?php echo htmlentities($row["MemberImage"]);?>" alt=""
			                                    style="border-radius: 200px;width:170px;height:170px;">
			                            </div>
			                            <div class="voolenteer_info d-flex align-items-end">
			                                <div class="social_links">
	
			                                </div>
			                                <div class="info_inner">
			                                    <h4><?php echo $row["MemberName"]; ?></h4>
			                                    <p><?php echo $row["Designation"]; ?></p>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			            <?php
			            if($cnt % 3 == 2) {
	                		echo '</div>';
	                		$started = 0;
	                	}
	                	$cnt++;  
					}
					if($started == 1) {
	                		echo '</div>';
	                }

                    if(isset($_SESSION['PEM'])) { ?>
                        <div class="col-lg-5 col-md-6">
                            <p>No Associates Found</p>
                        </div>
                    <?php }
					?>
            </div>
        </div>
        <!-- our_volunteer_area_end  -->

        <!-- our_volunteer_area_start  -->
        <div class="our_volunteer_area section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center mb-55">
                            <h3><span>Past Executive Members</span></h3>
                        </div>
                    </div>
                </div>

                <?php
                	$bod_arr = array("President", "General Secretary", "Vice President", "Joint Secretary", "Join Secretary", "Treasurer","Executive Council Member");

                	$cnt = 0;
                	$started = 0;
                    $_SESSION['PEM'] = true;

                	foreach($bod_arr as $position) {
                		$query = "SELECT * FROM team WHERE Category = 'Past Executive Member' and Designation = '$position'";
            			$result = mysqli_query($con, $query) or die("Error in ".$query."<br>".mysqli_error($con));
                        $num = mysqli_num_rows($result);
                        if($num > 0) {
                            unset($_SESSION['PEM']);
                        }
            			while($row = mysqli_fetch_assoc($result)) {
							if($cnt % 3 == 0) {
		                		echo '<div class="row justify-content-center" style="margin-top: 4%;">';
		                		$started = 1;
		                	} $cnt++;?>
		                	 		<div class="col-lg-4 col-md-6">
				                        <div class="single_volenteer">
				                            <div class="volenteer_thumb">
				                                <img src="admin/memberimage/<?php echo htmlentities($row["id"]);?>/<?php echo htmlentities($row["MemberImage"]);?>" alt=""
				                                    style="border-radius: 200px;width:170px;height:170px;">
				                            </div>
				                            <div class="voolenteer_info d-flex align-items-end">
				                                <div class="social_links">

				                                </div>
				                                <div class="info_inner">
				                                    <h4><?php echo $row["MemberName"]; ?></h4>
				                                    <p><?php echo $row["Designation"]; ?></p>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				            <?php
				            if($cnt % 3 == 2) {
		                		echo '</div>';
		                		$started = 0;
		                	}
		                	$cnt++;  
						}
                	}

                	if($started == 1) {
                		echo '</div>';
                	}

                    if(isset($_SESSION['PEM'])) { ?>
                        <div class="col-lg-5 col-md-6">
                            <p>No Past Executive Member Found</p>
                        </div>
                    <?php }
                ?>
            </div>
        </div>
        <!-- our_volunteer_area_end  -->

    </section>

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