<?php

include("harmoniser.php");







if ($_SESSION['LHDSJHFEIONFNONJDB8Y387TG382OBUIY2IV2I7EZE87Z']==true) 

{

	
$userdatalogout=$_SESSION['LHDSJHFEIONFNONJDB8Y387TG382OBUIY2IV2I7EZE87Z'];
$newlogoutsesskey=$logoutesskeyuser;
$updatesessionkey=mysqli_query($benzima,"UPDATE adminsdata SET sessionkey='$newlogoutsesskey' WHERE id='1' ");

													if($updatesessionkey)

													{


session_start();
session_destroy(); // destroy session
header("location:index.php");



}


else {
	session_destroy(); // destroy session
	header("location:index.php");
	
} 



}


elseif ($_SESSION['LHDSJHFEIONFNONJDB8Y387TG382OBUIY2IV2I7EZE87Z']==false) 

{

	session_destroy(); // destroy session
	header("location:login.php");
	
}





?>