<?php
session_start();
include('config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    date_default_timezone_set('Asia/Karachi');
    $currentTime = date('d-m-Y h:i:s A', time());


    if (isset($_POST['submit'])) {
        $sql = mysqli_query($con, "SELECT password FROM  admin where password='" . md5($_POST['password']) . "' && username='" . $_SESSION['alogin'] . "'");
        $num = mysqli_fetch_array($sql);
        if ($num > 0) {
            $con = mysqli_query($con, "update admin set password='" . md5($_POST['newpassword']) . "', updationDate='$currentTime' where username='" . $_SESSION['alogin'] . "'");
            $_SESSION['msg'] = "Password Changed Successfully !!";
        } else {
            $_SESSION['msg'] = "Old Password not match !!";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin | Change Password</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
        <script type="text/javascript">
            function valid() {
                if (document.chngpwd.password.value == "") {
                    alert("Current Password Filed is Empty !!");
                    document.chngpwd.password.focus();
                    return false;
                } else if (document.chngpwd.newpassword.value == "") {
                    alert("New Password Filed is Empty !!");
                    document.chngpwd.newpassword.focus();
                    return false;
                } else if (document.chngpwd.confirmpassword.value == "") {
                    alert("Confirm Password Filed is Empty !!");
                    document.chngpwd.confirmpassword.focus();
                    return false;
                } else if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
                    alert("Password and Confirm Password Field do not match  !!");
                    document.chngpwd.confirmpassword.focus();
                    return false;
                }
                return true;
            }
        </script>
    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container" style="margin-top:1%">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i>
                    </a>

                    <a class="brand" style="margin-bottom:2%">
                        HAMARA MUSTAQBIL | Admin
                    </a>
                    <a href="" style="margin-bottom:2%;margin-left:13%">
                        <img src="images/LOGO1.png" style="width:200px;height:60px;" alt="">
                    </a>

                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li><a href="#">
                                    Admin
                                </a></li>
                            <li class="nav-user dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="images/admin.png" class="nav-avatar" />
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="changepassword.php">Change Password</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div>
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                        <ul class="widget widget-menu unstyled" style="background-color: white">
								<li><a href="AddCause.php"><i class="menu-icon icon-tasks"></i>Add Cause</a></li>
								<li><a href="ManageCause.php"><i class="menu-icon icon-tasks"></i>Manage Cause</a></li>
								
								<li><a href="AddMember.php"><i class="menu-icon icon-table"></i>Add Team Member </a></li>
								<li><a href="ManageTeam.php"><i class="menu-icon icon-table"></i>Manage Team</a></li>
								
								<li><a href="AddEvent.php"><i class="menu-icon icon-table"></i>Add Event </a></li>
								<li><a href="ManageEvent.php"><i class="menu-icon icon-table"></i>Manage Event</a></li>

								<li><a href="AddWhatWeDo.php"><i class="menu-icon icon-tasks"></i>Add What We Do</a></li>
								<li><a href="ManageWhatWeDo.php"><i class="menu-icon icon-tasks"></i>Manage What We Do</a></li>

								<li><a href="AddResearch.php"><i class="menu-icon icon-table"></i>Add Research </a></li>
								<li><a href="ManageResearch.php"><i class="menu-icon icon-table"></i>Manage Research</a></li>

								<li><a href="AddMedia.php"><i class="menu-icon icon-table"></i>Add Media</a></li>
								<li><a href="ManageMedia.php"><i class="menu-icon icon-table"></i>Manage Media</a></li>
								
                                <li><a href="AddCounter.php"><i class="menu-icon icon-table"></i>Add Counter</a></li>
                                
                                <li><a href="ViewInbox.php"><i class="menu-icon icon-tasks"></i>View Inbox</a></li>
								<li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout</a></li>
							</ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">

                            <div class="module">
                                <div class="module-head">
                                    <h3>Admin Change Password</h3>
                                </div>
                                <div class="module-body">

                                    <?php if (isset($_POST['submit'])) { ?>
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?>
                                        </div>
                                    <?php } ?>
                                    <br />

                                    <form class="form-horizontal row-fluid" name="chngpwd" method="post" onSubmit="return valid();">

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Current Password</label>
                                            <div class="controls">
                                                <input type="password" placeholder="Enter your current Password" name="password" class="span8 tip" required>
                                            </div>
                                        </div>


                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">New Password</label>
                                            <div class="controls">
                                                <input type="password" placeholder="Enter your new current Password" name="newpassword" class="span8 tip" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Confirm Password</label>
                                            <div class="controls">
                                                <input type="password" placeholder="Enter your new Password again" name="confirmpassword" class="span8 tip" required>
                                            </div>
                                        </div>






                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit" class="btn">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>



                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->

        <div class="footer">
		<div class="container">
			<b class="copyright">&copy; 2020 HAMARA MUSTAQBIL </b>
		</div>
	</div>

        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    </body>
<?php } ?>