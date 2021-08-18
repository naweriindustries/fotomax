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
					<div class="panel-heading">New Messages

					 

					</div>
					<div class="panel-body">
					








<style type="text/css">
  


#myTable {
  border-collapse: collapse; /* Collapse borders */

  border: 1px solid #ddd; /* Add a grey border */
  
}

#myTable th, #myTable td {
  text-align: center; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
  text-align: center;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}



</style>

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>











 <div style="overflow-x:auto;">
                                        <table style="border:0px;" class="table" id="myTable" width="100%" cellspacing="0">
                                            
<thead>
                                            <tr style="padding: 26px; border: 0px;">
                                                

                                        

                                                <th>
                                                    
                                                    Email

                                                </th>

                                                <th>
                                                    
                                                    Subject

                                                </th>

                                                <th>
                                                    

                                                   Action
                                                </th>
                                               <th>
                                               	
                                               	Date 

                                               </th>
                                              
                                              



                                            </tr>

                                        </thead>
                                  


 <tbody id="myTable">


						<?php $getinstantaccessdata=mysqli_query($benzima,"SELECT * FROM messages WHERE status='Read' ORDER BY id DESC ");
						     while($instantdata=mysqli_fetch_array($getinstantaccessdata))

				{

					
					$altitle=htmlentities($instantdata['maintitle']);
					$instantindex=htmlentities($instantdata['id']);
					$statusinstant=htmlentities($instantdata['subtitle']);
					$dateofmessagenew=htmlentities($instantdata['dateofbirth']);


					?>

<tr>
	
<td><?php echo$altitle;?></td>




	<td><?php echo$statusinstant;?></td>


	
	<td><a href="message_details.php?messageid=<?php echo$instantindex;?>" target="_blank"><button class="btn btn-success"><i class="fa fa-eye"></i></button></a></td>


	<td><?php echo$dateofmessagenew;?></td>


	

</tr>






					<?php


				}


					?>










 	</tbody>


 </table>
</div>










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