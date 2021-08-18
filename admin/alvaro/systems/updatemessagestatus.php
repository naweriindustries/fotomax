<?php 


if(isset($_POST['markasread']))

{
$status="Read";

$updatemessagetoread=mysqli_query($benzima,"UPDATE messages SET status='$status' WHERE id='$msgid'");


if($updatemessagetoread)

{

header("location:message_details.php?messageid=$msgid");


}


else{


$updatemessagealert="Message Status Update Failed";


}

}









if(isset($_POST['markasunread']))

{
$status="New";

$updatemessagetoread=mysqli_query($benzima,"UPDATE messages SET status='$status' WHERE id='$msgid'");


if($updatemessagetoread)

{

header("location:message_details.php?messageid=$msgid");


}


else{


$updatemessagealert="Message Status Update Failed";


}

}


?>