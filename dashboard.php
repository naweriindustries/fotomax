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
<link rel="shortcut icon" href="logo/<?php echo$slogo;?>" type="image/x-icon">

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
	
	<br>
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em style="color:indigo;font-size: 26px;" class="fa fa-xl fa-video-camera color-blue"></em>
							<div class="medium" style="font-size: 20px;"><?php echo$xcount;?></div>
							<div class="text-muted">Purchase Count</div>
						</div>
					</div>
				</div>
			
			</div><!--/.row-->
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Trending
					


						<span style="padding:12px;" class="pull-right panel-button-tab-left"><em class="fa fa-star" style="color:green;"></em></span></div>
					<div class="panel-body">
						<div>
							






<div class="owl-carousel owl-carousel--link-card container owl-loaded" id="data-free-carousel">
    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s cubic-bezier(0, 0.65, 0.22, 1.09) 0s; width: 100%;">



<?php 


$findtpbankers=mysqli_query($chicago,"SELECT * FROM movieslists ORDER BY movieviewcount DESC LIMIT 12");
while($gettopbankers=mysqli_fetch_array($findtpbankers))

{


$topbankerimage=htmlentities($gettopbankers['movieposterportrait']);
$topbankeername=htmlentities($gettopbankers['moviename']);
$mn15=htmlentities($gettopbankers['moviepricingstatus']);
?>











    <a class="owl-item active" href="watch.php?movie=<?php echo$topbankeername;?>&tocken=<?php echo$movietockens;?>">

    	


    		<div class="item"> 

       <div class="mtn-card mtn-card--shadow mtn-card--image mtn-card--link  mtn-card--cursor" style="background:url('<?php echo$topbankerimage;?>') no-repeat center center" >
       	 <?php if($mn15=='free'){?>


				    	<span style="" class="indicator label-warning"></span> 



				    	<?php } elseif($mn15=='paid'){?>


				     <span style="" class="indicator label-success"></span> 


				     <?php } ?>   
   
        <div class="mtn-card__content">
	                    
                        <h3 class="mtn-card__header mtn-h7">
				<small>
  <?php echo$topbankeername;?></small>           </h3>
			   


            </div>
    </div>



	</div>





</a>





<?php } ?>













</div>


</div>



<div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><i class="mdi mdi-chevron-left"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="mdi mdi-chevron-right"></i></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div>

<script>
jQuery.noConflict();
(function($) {
    var carousel_options = {
        margin: 20,
        stagePadding: 150,
        dots: true,
        loop: false,
        slideBy: "page",
        dotsEach: false,
        slideTransition: easing,
        smartSpeed: 1000,
        navText: ["<i class='mdi mdi-chevron-left'></i>","<i class='mdi mdi-chevron-right'></i>"],
        responsive:{
            0:{
                items: 1,
                stagePadding: 40,
            },
            420:{
                items: 1,
                stagePadding: 60,
            },
            768:{
                items: 1,
                stagePadding: 80,
            },
            1024:{
                items: 3,
                nav: true,
                stagePadding:0            },
            1280:{
                items: 3,
                nav: true,
                mouseDrag: false,
                stagePadding:0            }
        },
        
    };
    $('#data-free-carousel').owlCarousel(Object.assign(carousel_options, events));

})(jQuery);
</script>
		</section>











						</div>
					</div>
				</div>
			</div>
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
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>

<?php } ?>
