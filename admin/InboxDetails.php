<?php
session_start();
include('config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else 
{

	?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Admin | Inbox Detail</title>
		<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link type="text/css" href="css/theme.css" rel="stylesheet">
		<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
		<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
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
									<div style = "display: flex; ">
										<h3 style = "float: left; width:85%; overflow:hidden;">Message</h3>
										<a href='ViewInbox.php' class='btn btn-primary' style = "float: right; width:15%; overflow:hidden;">Back</a>
									</div>
								</div>
								<div class="module-body">	

									<br />


									<?php 
									$row = '';
									$query = '';
									if (isset($_GET['view']) and isset($_GET['id'])) {

									$id = $_GET['id'];

									$query = mysqli_query($con, "select * from contact where id = '$id'") or die("Query Unsuccessful");
									$row = mysqli_fetch_assoc($query);
									?>

									<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
										<div class="control-group">
											<label class="control-label" for="basicinput">Name</label>
											<div class="controls">

												<?php

												if(mysqli_num_rows($query) > 0) {

												?>
												<p style = "padding: 5px; font-family: Arial, Helvetica, sans-serif; font-size: 150%; font-weight: bolder; background-color: #EDEDED; box-shadow: 4px 4px 4px #CFCFCF;"><?php echo $row['Name']; ?></p>
												<?php
													}
												?>
											</div>
										</div>



										<div class="control-group">
											<label class="control-label" for="basicinput">Email</label>
											<div class="controls">
												<?php

												if(mysqli_num_rows($query) > 0) {

												?>
												<p style = "padding: 5px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; background-color: #EDEDED; box-shadow: 2px 2px 2px #CFCFCF;"><?php echo $row['Email']; ?></p>
												<?php
													}
												?>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Subject</label>
											<div class="controls">
												<?php

												if(mysqli_num_rows($query) > 0) {

												?>
												<p style = "padding: 5px; font-family: Arial, Helvetica, sans-serif; font-size: 120%; font-weight: bold; background-color: #EDEDED; box-shadow: 2px 2px 2px #CFCFCF;"><?php echo $row['Subject']; ?></p>
												<?php
													}
												?>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Message</label>
											<div class="controls">
												<?php

												if(mysqli_num_rows($query) > 0) {

												?>
												<p class = "text-justify" style = "padding: 5px; font-family: Arial, Helvetica, sans-serif; font-size: 120%; background-color: #EDEDED; box-shadow: 5px 5px 5px #CFCFCF; word-wrap: break-word;"><?php echo $row['Message']; ?></p>
												<?php
													}
												?>
											</div>

										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Date Sent</label>
											<div class="controls">
												<?php

												if(mysqli_num_rows($query) > 0) {

												?>
												<p style = "padding: 5px; font-family: Arial, Helvetica, sans-serif; background-color: #EDEDED; box-shadow: 2px 2px 2px #CFCFCF;"><?php echo $row['postingDate']; ?></p>
												<?php
													}
												?>
											</div>

										</div>

									</form>
									<?php
										}
									?>
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