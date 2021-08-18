<?php




if(isset($_POST['updatemerchant']))


{


$sitename=mysqli_real_escape_string($benzima,$_POST['merchantmail']);
$siteabr=mysqli_real_escape_string($benzima,$_POST['merchantkey']);




$initupdateproceedure=mysqli_query($benzima,"UPDATE merchantdata SET merchantclient='$sitename', merchantsecret='$siteabr' ");

if($initupdateproceedure)


{


	$merchantmessagesuccess="Site Update Complete";
}

else{

	$merchantmessagedanger="Site Update Failed";
}

}


?>