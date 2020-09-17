<?php
session_start();
include('config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {

    if (isset($_POST['submit'])) 
    {

        $category = $_POST['Category'];
        $overview = $_POST['Overview'];
        $member = $_POST['Member'];
        $eventimage = str_replace(' ', '',$_FILES["EventImage"]["name"]);
        $eventimage2 = str_replace(' ', '',$_FILES["EventImage2"]["name"]);
        $eventimage3 = str_replace(' ', '',$_FILES["EventImage3"]["name"]);

        
        if($category=="Operation")
        {
         
            //for getting operation id
            $query = mysqli_query($con, "select max(id) as pid from operation");
            $result = mysqli_fetch_array($query);
            $operationid = $result['pid'] + 1;
            $dir = "operationimage/$operationid";
            if (!is_dir($dir)) {
                mkdir("operationimage/" . $operationid);
            }

            $query = "INSERT INTO operation (id,Overview,Member,EventImage,EventImage2,EventImage3) VALUES ($operationid,'$overview','$member','$eventimage','$eventimage2','$eventimage3')";
            $sql = mysqli_query($con, $query) or die("Unsuccessful Retry ");
            move_uploaded_file($_FILES["EventImage"]["tmp_name"], "operationimage/$operationid/" . str_replace(' ', '',$_FILES["EventImage"]["name"]));
            move_uploaded_file($_FILES["EventImage2"]["tmp_name"], "operationimage/$operationid/" . str_replace(' ', '', $_FILES["EventImage2"]["name"]));
            move_uploaded_file($_FILES["EventImage3"]["tmp_name"], "operationimage/$operationid/" . str_replace(' ', '', $_FILES["EventImage3"]["name"]));

            $_SESSION['msg'] = "Inserted Successfully !! " . $operationid . " ". $result['pid'];

        }

        else if($category=="Outreach")
        {

            //for getting operation id
            $query = mysqli_query($con, "select max(id) as pid from outreach");
            $result = mysqli_fetch_array($query);
            $outreachid = $result['pid'] + 1;
            $dir = "outreachimage/$outreachid";
            if (!is_dir($dir)) {
                mkdir("outreachimage/" . $outreachid);
            }
            
            $query = "INSERT INTO outreach  (id,Overview,Member,EventImage,EventImage2,EventImage3) VALUES ($outreachid,'$overview','$member','$eventimage','$eventimage2','$eventimage3')";
            $sql = mysqli_query($con, $query) or die("Unsuccessful Retry ");
            move_uploaded_file($_FILES["EventImage"]["tmp_name"], "outreachimage/$outreachid/" . str_replace(' ', '',$_FILES["EventImage"]["name"]));
            move_uploaded_file($_FILES["EventImage2"]["tmp_name"], "outreachimage/$outreachid/" . str_replace(' ', '', $_FILES["EventImage2"]["name"]));
            move_uploaded_file($_FILES["EventImage3"]["tmp_name"], "outreachimage/$outreachid/" . str_replace(' ', '', $_FILES["EventImage3"]["name"]));
            $_SESSION['msg'] = "Inserted Successfully !!";

        }
        
        else if($category=="School Health")
        {
        
    
            //for getting operation id
            $query = mysqli_query($con, "select max(id) as pid from school");
            $result = mysqli_fetch_array($query);
            $schoolid = $result['pid'] + 1;
            $dir = "schoolimage/$schoolid";
            if (!is_dir($dir)) {
                mkdir("schoolimage/" . $schoolid);
            }
    
            
            $query = "INSERT INTO school (id,Overview,Member,EventImage,EventImage2,EventImage3) VALUES ($schoolid,'$overview','$member','$eventimage','$eventimage2','$eventimage3')";
            $sql = mysqli_query($con, $query) or die("Unsuccessful Retry ");
            move_uploaded_file($_FILES["EventImage"]["tmp_name"], "schoolimage/$schoolid/" . str_replace(' ', '',$_FILES["EventImage"]["name"]));
            move_uploaded_file($_FILES["EventImage2"]["tmp_name"], "schoolimage/$schoolid/" . str_replace(' ', '', $_FILES["EventImage2"]["name"]));
            move_uploaded_file($_FILES["EventImage3"]["tmp_name"], "schoolimage/$schoolid/" . str_replace(' ', '', $_FILES["EventImage3"]["name"]));
            $_SESSION['msg'] = "Inserted Successfully !!";

        }

        else if($category=="Mental Health")
        {

    
            //for getting operation id
            $query = mysqli_query($con, "select max(id) as pid from mental");
            $result = mysqli_fetch_array($query);
            $mentalid = $result['pid'] + 1;
            $dir = "mentalimage/$mentalid";
            if (!is_dir($dir)) {
                mkdir("mentalimage/" . $mentalid);
            }
            
            $query = "INSERT INTO mental (id,Overview,Member,EventImage,EventImage2,EventImage3) VALUES ($mentalid,'$overview','$member','$eventimage','$eventimage2','$eventimage3')";
            $sql = mysqli_query($con, $query) or die("Unsuccessful Retry ");
            move_uploaded_file($_FILES["EventImage"]["tmp_name"], "mentalimage/$mentalid/" . str_replace(' ', '',$_FILES["EventImage"]["name"]));
            move_uploaded_file($_FILES["EventImage2"]["tmp_name"], "mentalimage/$mentalid/" . str_replace(' ', '', $_FILES["EventImage2"]["name"]));
            move_uploaded_file($_FILES["EventImage3"]["tmp_name"], "mentalimage/$mentalid/" . str_replace(' ', '', $_FILES["EventImage3"]["name"]));
            $_SESSION['msg'] = "Inserted Successfully !!";

        }
     
    }



?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin | Add What We Do</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
        <!-- <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script> -->
        <script type="text/javascript">
            bkLib.onDomLoaded(nicEditors.allTextAreas);
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
                                    <h3>Add What We Do</h3>
                                </div>
                                <div class="module-body">

                                    <?php if (isset($_POST['submit'])) { ?>
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?>
                                        </div>
                                    <?php } ?>


                                    <?php if (isset($_GET['del'])) { ?>
                                        <div class="alert alert-error">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']); ?><?php echo htmlentities($_SESSION['delmsg'] = ""); ?>
                                        </div>
                                    <?php } ?>

                                    <br />

                                    <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
                                    <div class="control-group">
											<label class="control-label" for="basicinput">Select Page</label>
											<div class="controls">
												<select name="Category" id="category">
													<option value="Operation">Operation</option>
													<option value="Outreach">Outreach</option>
													<option value="School Health">School Health</option>
													<option value="Mental Health">Mental Health</option>											
												</select>
											</div>
										</div>    
                                    
                                    
                                    <div class="control-group">
                                            <label class="control-label" for="basicinput">Overview Text</label>
                                            <div class="controls">
                                                <textarea name="Overview" placeholder="Enter Overview Text" rows="6" class="span8 tip"></textarea>
	   
                                            </div>
                                        </div>


                                            <div class="control-group">
                                                <label class="control-label" for="basicinput">How Do I Become A Member/Donor Text</label>
                                                <div class="controls">
                                                    <textarea name="Member" placeholder="Enter How Do I Become A Member/Donor Text" rows="6" class="span8 tip"></textarea>
                                                	
                                                </div>
                                            </div>

                                      


                                                <div class="control-group">
                                                    <label class="control-label" for="basicinput">Image 1</label>
                                                    <div class="controls">
                                                        <input type="file" accept="image/*" name="EventImage" id="productimage1" value="" class="span8 tip" required>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label" for="basicinput">Image 2</label>
                                                    <div class="controls">
                                                        <input type="file" accept="image/*" name="EventImage2" id="productimage1" value="" class="span8 tip" required>
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label" for="basicinput">Image 3</label>
                                                    <div class="controls">
                                                        <input type="file" accept="image/*" name="EventImage3" id="productimage1" value="" class="span8 tip" required>
                                                    </div>
                                                </div>


                                                <div class="control-group">
                                                    <div class="controls">
                                                        <button type="submit" name="submit" class="btn">Add</button>
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
        <script src="scripts/datatables/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function() {
                $('.datatable-1').dataTable();
                $('.dataTables_paginate').addClass("btn-group datatable-pagination");
                $('.dataTables_paginate > a').wrapInner('<span />');
                $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
                $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
            });
        </script>
    </body>
<?php } ?>