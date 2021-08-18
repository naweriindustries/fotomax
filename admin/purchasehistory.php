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
					<div class="panel-heading"> Purchase History

					 

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






	<?php

						 if($msgd){

							echo'<div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> '.$msgd.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						} 

						elseif($msgf){

							echo'<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> '.$msgf.'<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';

						}

						?>




 <div style="overflow-x:auto;">
                                        <table style="border:0px;" class="table" id="myTable" width="100%" cellspacing="0">
                                            
<thead>
                                            <tr style="padding: 26px; border: 0px;">
                                                

                                                <th>
                                                   Poster

                                                </th>

                                                <th>
                                                    
                                                   Buyer

                                                </th>

                                               <th>
                                               	
                                               	Genre
                                               </th>

                                               <th>Views</th>

                                                
                                               
                                                <th>
                                                    

                                                   Status

                                                </th>
                                              

                                                 <th>
                                                    
                                                    Price

                                                </th>

                                                  <th>
                                                    
                                                    Payment Status

                                                </th>


                                                <th>
                                                    

                                                    Edit
                                                </th>


                                                 <th>
                                                    

                                                    View
                                                </th>

                                            </tr>

                                        </thead>
                                  


 <tbody id="myTable">
<?php


if(isset($_GET['deletemovieid']))


{


$mxid=strip_tags($_GET['deletemovieid']);

//suspend purchase
$newmoviestatus="Suspended";
$suspend=mysqli_query($benzima,"UPDATE purchases SET status='$newmoviestatus' WHERE id='$mxid'");

}





if(isset($_GET['activatemovieid']))


{


$mxid=strip_tags($_GET['activatemovieid']);

//Reactivate purchase


$newmoviestatus="Complete";
$suspend=mysqli_query($benzima,"UPDATE purchases SET status='$newmoviestatus' WHERE id='$mxid'");

}


$purchasecount=mysqli_query($benzima,"SELECT * FROM purchases ORDER BY id DESC ");
while($xcount=mysqli_fetch_array($purchasecount))

{

					


					?>

<?php 
$purchaseissd=htmlentities($xcount['movieid']);
$paymoviestatus=htmlentities($xcount['status']);
$xid=htmlentities($xcount['id']);
$getinstantaccessdata=mysqli_query($benzima,"SELECT * FROM movieslists WHERE id='$purchaseissd'");
						     $instantdata=mysqli_fetch_array($getinstantaccessdata);

					$bg=htmlentities($instantdata['movieposterportrait']);
					$mid=htmlentities($instantdata['id']);
					$altitle=htmlentities($instantdata['moviename']);
					$instantindex=htmlentities($instantdata['movieprice']);
					$insatntstatus=htmlentities($instantdata['activity']);
					$premiumstatus=htmlentities($instantdata['moviepricingstatus']);
					$countsofmovies=htmlentities($instantdata['movieviewcount']);
					$moviegenre=htmlentities($instantdata['moviegenre']);









$uid=htmlentities($xcount['userid']);


$fetchalluserdata=mysqli_query($benzima,"SELECT * FROM allaccounts WHERE indexkey='$uid'");
$returnfetchedadata=mysqli_fetch_array($fetchalluserdata);

$userid=htmlentities($returnfetchedadata['indexkey']);
$firstname=htmlentities($returnfetchedadata['accfirstid']);
$lastname=htmlentities($returnfetchedadata['acclastid']);
$email=htmlentities($returnfetchedadata['acids']);
$phone=htmlentities($returnfetchedadata['accid']);
$acountbalance=htmlentities($returnfetchedadata['acbal']);
$photo=htmlentities($returnfetchedadata['facerecog']);
$usrapi=htmlentities($returnfetchedadata['bznessapi']);
$regdates=htmlentities($returnfetchedadata['acdatesdata']);
$uloginstat=htmlentities($returnfetchedadata['loginstats']);
$acageustat=htmlentities($returnfetchedadata['acagestatus']);


					?>


<tr>
	
	<td>
<small style="float:left"><?php echo$altitle;?> </small><br>
	<div style="border: 1px solid red; width:100px; border-radius:5px; height: 150px;margin-right:7px; margin-top:2px; overflow: hidden;" class="card">
<div class="overlay-div"></div>
<img src="<?php echo$bg;?>" alt="movieposter" width="100%" height="100%;">

 
  </div>


 </td>
	<td>

		
				<center><img style="width:45px; height: 45px; border-radius: 100%;" src="../acproofs/<?php echo$photo;?>" class="img-responsive" alt=""></center>
			
			
			<?php echo$firstname;?> <?php echo$lastname;?><br><?php echo$email;?></td>

	

<td>


<?php



$fetchaboutdatamerchant=mysqli_query($benzima,"SELECT * FROM genres WHERE id='$moviegenre' ");
$aboutmerchant=mysqli_fetch_array($fetchaboutdatamerchant);

$genre=htmlentities($aboutmerchant['gnrename']);








?>

	<?php echo$genre;?>
		



	</td>








<td><?php echo$countsofmovies;?></td>


	
	

	<td> <?php echo$insatntstatus;?> 
	</td>
	
	<td><?php echo$instantindex;?></td>

	<td><?php echo$paymoviestatus;?> <?php if($paymoviestatus=='Complete'){?><a href="purchasehistory.php?deletemovieid=<?php echo$xid;?>"><button class="btn btn-danger" style="text-align: center; /* Left-align text */"><i class="fa fa-warning"></i></button></a><?php } elseif($paymoviestatus=='Suspended'){?>

		<a href="purchasehistory.php?activatemovieid=<?php echo$xid;?>"><button class="btn btn-success" style="text-align: center; /* Left-align text */"><i class="fa fa-check"></i></button></a>

	<?php } ?>

	</td>
	<td> <a target="_blank" href="editmovies.php?movieid=<?php echo$mid;?>"><button class="btn btn-primary" style="text-align: center; /* Left-align text */"><i class="fa fa-pencil"></i></button></a></td>

	<td> <a target="_blank" href="viewmovies.php?movieid=<?php echo$mid;?>"><button class="btn btn-success" style="text-align: center; /* Left-align text */"><i class="fa fa-eye"></i></button></a></td>
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