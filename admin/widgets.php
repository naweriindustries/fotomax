<?php

include("harmoniser.php");

    if (strlen($senssions==false)) {
  header('location:clearsessiondata.php');
  } else {

	?>


	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo$sname;?></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link rel="shortcut icon" href="logo/<?php echo$slogo;?>" type="image/x-icon">	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>

			

			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="../logo/<?php echo$slogo;?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo$sname;?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		
		<ul class="nav menu">
			<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="widgets.php"><em class="fa fa-key">&nbsp;</em> Credentials</a></li>
			<li><a href="charts.php"><em class="fa fa-cog">&nbsp;</em> Settings</a></li>
			<li><a href="terms.php"><em class="fa fa-list">&nbsp;</em> Key Words</a></li>

			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-users">&nbsp;</em> Users <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="allusers.php">
						<span class="fa fa-arrow-right">&nbsp;</span> All
					</a></li>

					<li><a class="" href="new.php">
						<span class="fa fa-arrow-right">&nbsp;</span> New
					</a></li>

					<li><a class="" href="old.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Old
					</a></li>


					<li><a class="" href="activeusers.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Online
					</a></li>
					<li><a class="" href="Offline.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Offline
					</a></li>
				</ul>
			</li>



			<li class="parent "><a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-envelope">&nbsp;</em> Messages <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li><a class="" href="newmessages.php">
						<span class="fa fa-arrow-right">&nbsp;</span> New
					</a></li>
					<li><a class="" href="ReadMessages.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Read
					</a></li>
					<li><a class="" href="Unreadmessages.php">
						<span class="fa fa-arrow-right">&nbsp;</span>All
					</a></li>
				</ul>
			</li>


				<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-video-camera">&nbsp;</em> Movies <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="genres.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Genres
					</a></li>

					<li><a class="" href="latestmovies.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Latest
					</a></li>


					<li><a class="" href="purchasehistory.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Purchases
					</a></li>

				

					<li><a class="" href="allmovies.php">
						<span class="fa fa-arrow-right">&nbsp;</span> All Movies
					</a></li>






					<li><a class="" href="mostviewed.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Most viewed
					</a></li>

						<li><a class="" href="freemovies.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Free Movies
					</a></li>

					<li><a class="" href="premiummovies.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Premium Movies
					</a></li>


					
					<li><a class="" href="MostPurchased.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Most Purchased
					</a></li>



				</ul>
			</li>


			<li><a href="clearsessiondata.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	
	<br>

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						General Profile
						


						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body articles-container">

						<?php if($loginsuccess) { 

							echo'<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> '.$loginsuccess.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						}


						elseif($loginerror)

							{  

							echo'<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> '.$loginerror.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';


							 } ?>




		<!-- General profile Data Here-->



						<form action="" method="POST" enctype="multipart/form-data">
							
							<label>User Name</label>
							<input type="text" class="form-control" name="usernamed" required="true">
							<br>
							<label>Password</label>
							<input type="Password" class="form-control" name="password">
							
							<br>
							<button type="submit" name="changepassusername" class="btn btn-block btn-danger"> <em class="fa fa-user"></em>  Change User Name</button>
						</form>





					</div>
				</div><!--End .articles-->
				
				












			</div><!--/.col-->
			
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Change Password
						

							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"> <em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						



						<?php if($loginpsuccess) { 

							echo'<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> '.$loginpsuccess.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						}


						elseif($loginperror)

							{  

							echo'<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> '.$loginperror.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

							
							 } ?>



						<form action="" method="POST" enctype="multipart/form-data">
							
							<label>Old Password</label>
							<input type="password" class="form-control" name="oldpassword" required="true">
							<br>
							<label>New Password</label>
							<input type="Password" class="form-control" name="newpassword">
							<br>
							<button type="submit" name="changepasskeys" class="btn btn-block btn-danger"><em class="fa fa-key"></em>  Change Password</button>
						</form>





						<!-- Change Password Data Here-->





					</div>
				</div>
				

























			</div><!--/.col-->
			
		</div><!--/.row-->
	</div>	<!--/.main-->
	  

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>


<?php } ?>