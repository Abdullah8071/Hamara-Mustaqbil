<?php
session_start();
include('config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {

	if (isset($_POST['submit'])) {
		$membername = $_POST['MemberName'];
		$designation = $_POST['Designation'];
		$category = $_POST['Category'];
		$memberimage = $_FILES["MemberImage"]["name"];
		$description = $_POST['Description'];

		//for getting cause id
		$query = mysqli_query($con, "select max(id) as pid from team");
		$result = mysqli_fetch_array($query);
		$memberid = $result['pid'] + 1;
		$dir = "memberimage/$memberid";
		if (!is_dir($dir)) {
			mkdir("memberimage/" . $memberid);
		}

		move_uploaded_file($_FILES["MemberImage"]["tmp_name"], "memberimage/$memberid/" . $_FILES["MemberImage"]["name"]);
		$query = "INSERT INTO team (id,MemberName,Designation,Category,MemberImage,Description) VALUES ($memberid,'$membername','$designation','$category','$memberimage','$description')";
		$sql = mysqli_query($con, $query) or die("Unsuccessful Retry");
		$_SESSION['msg'] = "Member Inserted Successfully !!";
	}



	?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Admin | Add Member</title>
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
									<h3>Add Team Member</h3>
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
											<label class="control-label" for="basicinput">Name</label>
											<div class="controls">
												<input type="text" name="MemberName" placeholder="Enter Member Name" class="span8 tip" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Category</label>
											<div class="controls">
												<select name="Category" id="category">
													<option value="Board of Directors">Board of Director</option>
													<option value="Executive Members">Executive Member</option>									
													<option value="Associates">Associate</option>
													<option value="Past Executive Member">Past Executive Member</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Designation</label>
											<div class="controls">
												<select name="Designation" id="designation">
													<!-- BOD -->
													<option value="Board of Director">Board of Director</option>


													<!-- Executive Members & Past Executive Members -->
													<option value="President">President</option>
													<option value="General Secretary">General Secretary</option>
													<option value="Vice President">Vice President</option>
													<option value="Joint Secretary">Joint Secretary</option>
													<option value="Join Secretary">Join Secretary</option>
													<option value="Treasurer">Treasurer</option>
													<option value="Executive Council Member">Executive Council Member</option>
													<!--heads-->

													<option value="Mental Health Head">Mental Health Head</option>
													<option value="Media Head">Media Head</option>
													<option value="Videography Head">Videography Head</option>
													<option value="Operations Head">Operations Head</option>
													<option value="Research Head">Research Head</option>
													<option value="Outreach Head">Outreach Head</option>
													<option value="School health Head">School health Head</option>			
													<option value="Finance Head"> Finance Head</option>
													
													<!-- Associate -->
													<option value="School Health Associate">School Health Associate</option>
													<option value="Mental Health Associate">Mental Health Associate</option>
													<option value="Operation Associate">Operation Associate</option>
													<option value="Outreach Associate">Outreach Associate</option>
													<option value="Media Associate">Media Associate</option>
													<option value="Publication Associate">Publication Associate</option>
													<option value="Research Associate">Research Associate</option>
													<option value="Finance Associate">Finance Associate</option>


												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Member Image</label>
											<div class="controls">
												<input type="file" accept="image/*" name="MemberImage" id="productimage1" value="" class="span8 tip" required>
											</div>
										</div>
										<div class="control-group">
											<p>Note: Select category and designation carefully to avoid any conflict</p>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Board of Director Description</label>
											<div class="controls">
												<textarea name="Description" placeholder="Enter BOD Description if member is BOD." rows="6" class="span8 tip"></textarea>
											
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