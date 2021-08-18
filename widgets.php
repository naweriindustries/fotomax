<?php

include("troublecauser.php");

    if (strlen($sesionskeys==false)) {
  header('location:clearsessdata.php');
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

<link rel="stylesheet" id="wp-block-library-css" href="pictona/style.min.css" type="text/css" media="all">
<link rel="stylesheet" id="mtn-default-style-css" href="pictona/style.css" type="text/css" media="all">
<link rel="stylesheet" id="mtn-material-icons-css" href="pictona/icon" type="text/css" media="all">
<link rel="stylesheet" id="mtn-material-design-icons-css" href="pictona/materialdesignicons.min.css" type="text/css" media="all">

<link rel="stylesheet" id="mtn-theme-style-css" href="pictona/theme-style.min.css" type="text/css" media="all">
<link rel="stylesheet" id="mtn-owlcarousel-style-css" href="pictona/owl.carousel.min.css" type="text/css" media="all">
<link rel="stylesheet" id="mtn-owlcarousel-theme-style-css" href="pictona/owl.theme.default.min.css" type="text/css" media="all">
<link rel="stylesheet" id="mtn-prism-css-css" href="pictona/prism.css" type="text/css" media="all">
<link rel="shortcut icon" href="favicon/<?php echo$sf;?>" type="image/x-icon">

	<script type="text/javascript" src="pictona/frontend-gtag.min.js" id="exactmetrics-frontend-script-js"></script>
<script type="text/javascript" src="pictona/jquery.min.js" id="mtn-jquery-js-js"></script>
<script type="text/javascript" src="pictona/popper.min.js" id="mtn-popper-js-js"></script>
<script type="text/javascript" src="pictona/bootstrap.min.js" id="mtn-bootstrap-js-js"></script>
<script type="text/javascript" src="pictona/owl.carousel.min.js" id="mtn-owlcarousel-js-js"></script>
<script type="text/javascript" src="pictona/masonry.js" id="mtn-masonry-js-js"></script>
<script type="text/javascript" src="pictona/material-component-handler.js" id="mtn-material-js-js"></script>
<script type="text/javascript" src="pictona/button.js" id="mtn-button-js-js"></script>
<script type="text/javascript" src="pictona/checkbox.js" id="mtn-checkbox-js-js"></script>
<script type="text/javascript" src="pictona/collapse.js" id="mtn-collapse-js-js"></script>
<script type="text/javascript" src="pictona/filtering-menu.js" id="mtn-filtering-menu-js-js"></script>
<script type="text/javascript" src="pictona/input.js" id="mtn-input-js-js"></script>
<script type="text/javascript" src="pictona/carousel.js" id="mtn-carousel-js-js"></script>
<script type="text/javascript" src="pictona/progress-indicator.js" id="mtn-progress-js-js"></script>
<script type="text/javascript" src="pictona/radio.js" id="mtn-radio-js-js"></script>
<script type="text/javascript" src="pictona/select.js" id="mtn-select-js-js"></script>
<script type="text/javascript" src="pictona/ripple.js" id="mtn-ripple-js-js"></script>
<script type="text/javascript" src="pictona/clipboard.js" id="mtn-theme-copy-js"></script>
<script type="text/javascript" src="pictona/cookie.js" id="mtn-cookie-notice-js"></script>
<script type="text/javascript" src="pictona/polyfill.min.js" id="mtn-theme-polyfill-js"></script>

	
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
				<a class="navbar-brand" href="#"><span><?php echo$sname;?></span></a>
				<ul class="nav navbar-top-links navbar-right">
					






					
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="acproofs/<?php echo$photo;?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo$firstname;?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		
		<ul class="nav menu">
			<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="widgets.php"><em class="fa fa-user-circle">&nbsp;</em> My Profile</a></li>
			<li><a href="charts.php"><em class="fa fa-line-chart">&nbsp;</em> Purchase History</a></li>

			<li><a href="clearsessdata.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						General Data
						
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body articles-container">
						





						<?php



	 if($genacerror)


	 { 

echo'<div class="alert bg-danger" style="width:100%;background-color:red; color:white;" role="alert"> <i class="fa  fa-lg  fa-warning">&nbsp;</i> '.$genacerror.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>'; 

	 } 

	 elseif($genacsuccess)

	 { 



		echo'<div style="width:100%; background-color:green; color:white;" class="alert bg-success"  role="alert"><i class="fa fa-lg fa-check">&nbsp;</i> '.$genacsuccess.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>'; 

	} 


	?>




<style type="text/css">
    
    #yourBtn {
  position: relative;
  font-size: 18px;
  font-family: cambria;
  width: 100%;
  padding: 10px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border: 1px dashed #BBB;
  text-align: center;
  background-color: #DDD;
  cursor: pointer;
}


</style>
<script type="text/javascript">
    
    function getFile() {
  document.getElementById("upfile").click();
}

function sub(obj) {
  var file = obj.value;
  var fileName = file.split("\\");
  document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
  document.myForm.submit();
  event.preventDefault();
}


</script>  


<form action="" method="POST" enctype="multipart/form-data" class="login100-form">
	


     <center>   <div class="row px-3"> <label class="mb-1">
                            
                        </label> 

                         <div style="border-radius: 100%; width:158px; height:158px; " id="yourBtn" onclick="getFile()"><b>&nbsp;&nbsp;&nbsp; <center><i  style="font-size: 70px;" class="fa fa-user-o"></i></center> </b></div>

  <div style='height: 0px;width: 0px; overflow:hidden;'>

<input class="form-control" id="upfile" type="file" name="image" >
<input class="form-control" id="upfile" type="hidden" value="<?php echo$photo;?>" name="image">
    

    </div>

     </div>

    </center>






<div class="form-group" data-validate="First Name is required">
<span class="form-label">First Name</span>
<input required class="form-control" type="text" name="fname" value="<?php echo$firstname;?>" placeholder="Enter First Name">
<span class="focus-input100"></span>
</div>


<div class="form-group" data-validate="Last Name is required">
<span class="form-label">Last Name</span>
<input required class="form-control" type="text" name="lname"  value="<?php echo$lastname;?>" placeholder="Enter Last Name">
<span class="focus-input100"></span>
</div>
<div class="form-group" data-validate="Email is required For Receipts">
<span class="form-label">Email</span>
<input required class="form-control"  type="email"  value="<?php echo$email;?>" name="regmail" placeholder="Enter Your Email">
<span class="focus-input100"></span>
</div>
<div class="form-group" data-validate="Phone Number is required">
<span class="form-label">Phone</span>
<input required class="form-control" type="text"  name="regphone"  value="<?php echo$phone;?>" placeholder="Enter Your Phone Number Width Country Code">
<span class="focus-input100"></span>
</div>



<div class="container-login100-form-btn">
<button type="submit" name="updateuserdata" class="btn btn-danger btn-block">
Update
</button>
</div>
</form>






					</div>
				</div><!--End .articles-->
				
			






















			</div><!--/.col-->
			
			<div class="col-md-6">


				<div class="panel panel-default">
					<div class="panel-heading">
						Change Password
					

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">

						<?php



	 if($changepasserror)


	 { 

echo'<div class="alert bg-danger" style="width:100%;background-color:red; color:white;" role="alert"> <i class="fa  fa-lg  fa-warning">&nbsp;</i> '.$changepasserror.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>'; 

	 } 

	 elseif($changepasssuccess)

	 { 



		echo'<div style="width:100%; background-color:green; color:white;" class="alert bg-success"  role="alert"><i class="fa fa-lg fa-check">&nbsp;</i> '.$changepasssuccess.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>'; 

	} 


	?>

						
<form action="" method="POST" enctype="multipart/form-data" class="login100-form">


<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
<span class="form-label">New Password</span>
<input required class="form-control" type="password" name="newpass" placeholder="Enter New Password">
<span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input m-b-18" data-validate="Reset Key is required When You Forget Password">
<span class="form-label">Secret Reset Key</span>
<input required class="form-control" type="password" name="secret" placeholder="Your Secret Key">
<span class="focus-input100"></span>
</div>
<br>

<div class="container-login100-form-btn">
<button type="submit" name="updateuserpass" class="btn btn-danger btn-block">
Update
</button>
</div>
</form>


					</div>
				</div>





				<div class="panel panel-default">
					<div class="panel-heading">
						Change Reset Key
					

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">



						<?php



	 if($changereseterror)


	 { 

echo'<div class="alert bg-danger" style="width:100%;background-color:red; color:white;" role="alert"> <i class="fa  fa-lg  fa-warning">&nbsp;</i> '.$changereseterror.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>'; 

	 } 

	 elseif($changeresetsuccess)

	 { 



		echo'<div style="width:100%; background-color:green; color:white;" class="alert bg-success"  role="alert"><i class="fa fa-lg fa-check">&nbsp;</i> '.$changeresetsuccess.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>'; 

	} 


	?>


						
<form action="" method="POST" enctype="multipart/form-data" class="login100-form">


<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
<span class="form-label">Old Secret Reset Key</span>
<input required class="form-control" type="password" name="oldsecret" placeholder="Old Reset Key">
<span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input m-b-18" data-validate="Reset Key is required When You Forget Password">
<span class="form-label">New Secret Reset Key</span>
<input required class="form-control" type="password" name="newsecret" placeholder="New Secret Key">
<span class="focus-input100"></span>
</div>
<br>

<div class="container-login100-form-btn">
<button type="submit" name="updateuserkey" class="btn btn-danger btn-block">
Update
</button>
</div>
</form>


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