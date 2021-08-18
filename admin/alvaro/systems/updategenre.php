<?php




if(isset($_POST['updategenre']))


{


$sitename=mysqli_real_escape_string($benzima,$_POST['maintitle']);
$siteabr=mysqli_real_escape_string($benzima,$_POST['status']);




$initupdateproceedure=mysqli_query($benzima,"UPDATE genres SET gnrename='$sitename',status='$siteabr' WHERE id='$genreids' ");

if($initupdateproceedure)


{


	$instantdataeditsuccess="Genre Updated";
}

else{

	$instantdataediterror="Genre Not Edited";
}

}


?>