<?php




if(isset($_POST['updatesystemtext']))


{


$sitename=mysqli_real_escape_string($benzima,$_POST['name']);
$siteabr=mysqli_real_escape_string($benzima,$_POST['abr']);
$sconames=mysqli_real_escape_string($benzima,$_POST['company']);
$sdescr=mysqli_real_escape_string($benzima,$_POST['des']);
$skeyw=mysqli_real_escape_string($benzima,$_POST['key']);



$initupdateproceedure=mysqli_query($benzima,"UPDATE general_system_data SET sitename='$sitename', siteabr='$siteabr', coname='$sconames', sitedesc='$sdescr', sitekeys='$skeyw' ");

if($initupdateproceedure)


{


	$genupdatemessages="Site Update Complete";
}

else{

	$genupdatemessagee="Site Update Failed";
}

}


?>