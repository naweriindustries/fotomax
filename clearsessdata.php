<?php
			include("troublecauser.php");
 


if (strlen($sesionskeys==true)) 

{

	
$userdatalogout=$sesionskeys;
$newlogoutsesskey=$logoutesskeyuser;
$logoutsession=mysqli_query($chicago,"UPDATE allaccounts SET ackeynow='$newlogoutsesskey',loginstats='no' WHERE ackeynow='$userdatalogout'");
if($logoutsession)

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

elseif (strlen($sesionskeys==false)) 

{

	session_destroy(); // destroy session
	header("location:index.php");
	
}


?>