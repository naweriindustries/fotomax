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
			
		</div><!--/.row-->
		<br>
	

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						General Settings
						
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body articles-container">

						<div class="article">


							<?php

						 if($genupdatemessages){

							echo'<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> '.$genupdatemessages.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						} 

						elseif($genupdatemessagee){

							echo'<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> '.$genupdatemessagee.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						}

						?>
							<div class="col-xs-12">
								<div class="row">
									





									<!--settings form here-->




									<form action="" method="POST" enctype="multipart/form-data">
										
										<label>Site Name</label>
										<input required="true" type="text" class="form-control" value="<?php echo$sname;?>"  name="name">
										<br>


										<label>Site Abreviation</label>
										<input required="true" type="text" class="form-control" value="<?php echo$sabr;?>"  name="abr">
										<br>


										<label>Company Name</label>
										<input required="true" type="text" class="form-control" value="<?php echo$sconame;?>"  name="company">
										<br>


										


										<label>Site Description</label>
										<textarea required="true" style="height: 150px" class="form-control" name="des"><?php echo$sdesc;?></textarea>
										<br>


										<label>Site Key Words</label>
										<textarea required="true" style="height: 150px" class="form-control" name="key"><?php echo$skeys;?></textarea>
										<br>


										<input type="submit" class="btn btn-block btn-danger" value="Save Changes"  name="updatesystemtext">









									</form>



								</div>
							</div>
							
						</div><!--End .article-->
						
						
						
					

					</div>
				</div><!--End .articles-->
				
				<div class="panel panel-default ">
					<div class="panel-heading">
						Update Logo
						

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="col-md-12 no-padding">
							
						
									<?php

						 if($systemgeneralmessage){

							echo'<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> '.$systemgeneralmessage.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						} 

						elseif($systemgeneralmessager){

							echo'<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> '.$systemgeneralmessager.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						}

						?>





									<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
										
										
										<input type="file" required class="form-control"   name="image">
										<input type="hidden" class="form-control" value="<?php echo$slogo;?>"  name="image">
										<br>


										




										<input type="submit" class="btn btn-block btn-danger" value="Save Changes"  name="updateindexlogo">









									</form>






						</div>
					</div>
				</div>



				<div class="panel panel-default">
					<div class="panel-heading">
						Update Index Image
						


						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						



									<?php

						 if($indeximagemessagesuccess){

							echo'<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> '.$indeximagemessagesuccess.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						} 

						elseif($indeximagemessagedanger){

							echo'<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> '.$indeximagemessagedanger.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						}

						?>




									<form action="" method="POST" enctype="multipart/form-data">
										
										
										<input type="file" required class="form-control"  name="image">
										<input type="hidden" class="form-control" value="<?php echo$sysimage;?>"  name="image">
										<br>


										




										<input type="submit" class="btn btn-block btn-danger" value="Save Changes"  name="updateindeximage">









									</form>



				













					</div>
					

				</div>



			



				
				<div class="panel panel-default ">
					<div class="panel-heading">
						Update Login Image
						

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="col-md-12 no-padding">
							
						
									<?php

						 if($loginpagemessagesuccess){

							echo'<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> '.$loginpagemessagesuccess.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						} 

						elseif($loginpagemessagedanger){

							echo'<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> '.$loginpagemessagedanger.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						}

						?>



									<form action="" method="POST" enctype="multipart/form-data">
										
										
										<input type="file" required class="form-control"   name="image">
										<input type="hidden" class="form-control" value="<?php echo$loginpageimage;?>"  name="image">
										<br>


										




										<input type="submit" class="btn btn-block btn-primary" value="Save Changes"  name="updateloginpageimage">









									</form>






						</div>
					</div>
				</div>





	<div class="panel panel-default ">
					<div class="panel-heading">
						Update Reset Password Image
						

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="col-md-12 no-padding">
							
						
									<?php

						 if($indexresetsuccess){

							echo'<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> '.$indexresetsuccess.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						} 

						elseif($indexresetdanger){

							echo'<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> '.$indexresetdanger.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						}

						?>



									<form action="" method="POST" enctype="multipart/form-data">
										
										
										<input type="file" required class="form-control"   name="image">
										
										<br>


										




										<input type="submit" class="btn btn-block btn-primary" value="Save Changes"  name="updateresetimage">









									</form>






						</div>
					</div>
				</div>





			</div><!--/.col-->
			
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						About Us
						

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
							<?php

						 if($aboutsuccess){

							echo'<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> '.$aboutsuccess.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						} 

						elseif($abouterror){

							echo'<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> '.$abouterror.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						}

						?>





									<form action="" method="POST" enctype="multipart/form-data">
										
										<label>Main Title</label>
										<input required="true" type="text" class="form-control" value="<?php echo$maintitle;?>"  name="maintitle">
										<br>


										<label>Sub Title</label>
										<input required="true" type="text" class="form-control" value="<?php echo$subtitles;?>"  name="subtitle">
										<br>


										<label>About Image</label>
										<input type="file" required class="form-control"  name="image">
										<input type="hidden" class="form-control" value="<?php echo$aboutimages;?>"  name="image">
										<br>

										<label>About Us</label>
										<textarea required="true" style="height: 150px" class="form-control" name="about"><?php echo$aboutdescription;?></textarea>
										<br>


										


									


										


										<input type="submit" class="btn btn-block btn-danger" value="Save Changes"  name="updateaboutdata">









									</form>









						<!--About Us Data Form Here-->
					</div>
				</div>







				<div class="panel panel-default ">
					<div class="panel-heading">
						Terms Of Use Page
						


						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body timeline-container">
					


	<?php

						 if($termsmessagesuccess){

							echo'<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> '.$termsmessagesuccess.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						} 

						elseif($termsmessagedanger){

							echo'<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> '.$termsmessagedanger.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						}

						?>




					<!--Terms Of Use Here-->

									<form action="" method="POST" enctype="multipart/form-data">
										
										<label>Main Title</label>
										<input required="true" type="text" class="form-control" value="<?php echo$mainttitle;?>"  name="title">
										<br>


										<label>Sub Title</label>
										<input required="true" type="text" class="form-control" value="<?php echo$subttitles;?>"  name="subtitle">
										<br>



										<label>Terms Image</label>
										<input type="file" required class="form-control"   name="image">
										<input type="hidden" class="form-control" value="<?php echo$abouttimages;?>"  name="image">
										<br>


										<label>Terms Of Use</label>
										<textarea required="true" style="height: 150px" class="form-control" name="terms"><?php echo$abouttdescription;?></textarea>
										<br>




										<input type="submit" class="btn btn-block btn-danger" value="Save Changes"  name="updatetou">









									</form>



				




					</div>
				</div>



						<div class="panel panel-default ">
					<div class="panel-heading">
						Merchant Data
						


						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body timeline-container">

						<?php

						 if($merchantmessagesuccess){

							echo'<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> '.$merchantmessagesuccess.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						} 

						elseif($merchantmessagedanger){

							echo'<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> '.$merchantmessagedanger.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						}

						?>
					






					<!--Merchant Data-->

				
									<form action="" method="POST" enctype="multipart/form-data">
										
										<label>Merchant mail</label>
										<input required="true" type="text" class="form-control" value="<?php echo$clientmerchant;?>"  name="merchantmail">
										<br>


										<label>Merchant API Key</label>
										<input required="true" type="text" class="form-control" value="<?php echo$merchantsecret;?>"  name="merchantkey">
										<br>




										<input type="submit" class="btn btn-block btn-danger" value="Save Changes"  name="updatemerchant">




									</form>







					</div>
				</div>





				<div class="panel panel-default ">
					<div class="panel-heading">
						Update Registration Image
						

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="col-md-12 no-padding">
							
						
									<?php

						 if($indexmobilemessagesuccess){

							echo'<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> '.$indexmobilemessagesuccess.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						} 

						elseif($indexmobilemessagedanger){

							echo'<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> '.$indexmobilemessagedanger.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						}

						?>



									<form action="" method="POST" enctype="multipart/form-data">
										
										
										<input type="file" required class="form-control"   name="image">
										
										<br>


										




										<input type="submit" class="btn btn-block btn-primary" value="Save Changes"  name="updateregimage">









									</form>






						</div>
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