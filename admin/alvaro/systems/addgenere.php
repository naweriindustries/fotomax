<?php




if(isset($_POST['addgenre']))


{


$sitename=mysqli_real_escape_string($benzima,$_POST['maintitle']);
$siteabr=mysqli_real_escape_string($benzima,$_POST['status']);




$initupdateproceedure=mysqli_query($benzima,"INSERT INTO genres (gnrename,status) VALUES('$sitename','$siteabr') ");

if($initupdateproceedure)


{


	$instantdataaddsuccess="Genre Added";
}

else{

	$instantdataadderror="Genre Not Added";
}

}


?>