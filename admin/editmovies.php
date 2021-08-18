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
		

				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Add Movies

					 <a href="allmovies.php"><button class="btn btn-success" style="float: right;"><i class="fa fa-arrow-left"></i></button></a>

					</div>
					<div class="panel-body">
					



	<?php

						 if($movieeditsuccess){

							echo'<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> '.$movieeditsuccess.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						} 

						elseif($movieediterror){

							echo'<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> '.$movieediterror.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						}

						?>





									<form action="" method="POST" enctype="multipart/form-data">
										
										<label>Movie Title</label>
										<input required="true" type="text" class="form-control" value="<?php echo$moviename;?>"  name="moviename">
										<br>


										<label>Poster Portrait</label>
										<input  type="file" class="form-control" value="<?php echo$potrait;?>"   name="potrait">
										<br>
											<label>Poster Landscape </label>
											<input  type="file" class="form-control" value="<?php echo$landscape;?>"    name="landscape">
										<br>

											<label>Video Link</label>
											
											<input required="true" type="text" class="form-control"  value="<?php echo$video;?>"   name="video">
										<br>

											<label>Movie Price <small style="color:green"> (USD) </small></label>
											<input required="true" type="text" class="form-control" value="<?php echo$price;?>"  name="price">
										<br>




										<label>Activity Status<small style="color:green"> (Free Or Paid) </small></label>
										<select class="form-control" name="premiumstatus">
											<?php if($freeorpaid=='paid'){?>
											<option selected="true" value="paid" class="form-control">Premium</option><br>
											<option value="free" class="form-control">Free</option>

											<?php } elseif($freeorpaid=='free') {?>

												<option value="paid" class="form-control">Premium</option><br>
											<option  selected="true" value="free" class="form-control">Free</option>


											<?php } ?>
										</select>

<br>

<label>Activity Status<small style="color:green"> (Enable Or Disable) </small></label>
										<select class="form-control" name="status">
											<?php if($enableordisable=='enable'){?>
											<option selected="true" value="enable" class="form-control">Enable</option><br>
											<option value="disable" class="form-control">Disable</option>

											<?php } elseif($enableordisable=='disable'){?>

	<option value="enable" class="form-control">Enable</option><br>
											<option selected="true"  value="disable" class="form-control">Disable</option>

											<?php } ?>
										</select>

<br>



<label>Genre<small style="color:green"> (Select Cartegory) </small></label>
										<select class="form-control" name="genre">
											
											<?php $getinstantacceessdata=mysqli_query($benzima,"SELECT * FROM genres WHERE id='$genre' ");
						    $instantdatia=mysqli_fetch_array($getinstantacceessdata);
$altitlqe=htmlentities($instantdatia['gnrename']);



						     	?>

						     	<option selected="true" value="<?php echo$genre;?>"><?php echo$altitlqe;?></option>

						<?php $getinstantaccessdata=mysqli_query($benzima,"SELECT * FROM genres WHERE status='enable' ");
						     while($instantdata=mysqli_fetch_array($getinstantaccessdata))

				{

					$bg=htmlentities($instantdata['id']);
					$altitle=htmlentities($instantdata['gnrename']);
					
					
					


					?>

											<option value="<?php echo$bg;?>" class="form-control"><?php echo$altitle;?></option><br><br>
										

<?php } ?>
										</select>

<br>


									


										


										<input type="submit" class="btn btn-block btn-danger" value="Add Movie"  name="updatemovie">









									</form>
















					</div>
				</div><!-- /.panel-->
				


			</div><!-- /.col-->
			
		</div><!-- /.row -->
	</div><!--/.main-->
	
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