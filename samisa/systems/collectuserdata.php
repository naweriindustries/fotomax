<?php



$fetchalluserdata=mysqli_query($chicago,"SELECT * FROM allaccounts WHERE ackeynow='$sesionskeys'");
$returnfetchedadata=mysqli_fetch_array($fetchalluserdata);

$userid=htmlentities($returnfetchedadata['indexkey']);
$firstname=htmlentities($returnfetchedadata['accfirstid']);
$lastname=htmlentities($returnfetchedadata['acclastid']);
$email=htmlentities($returnfetchedadata['acids']);
$phone=htmlentities($returnfetchedadata['accid']);
$acountbalance=htmlentities($returnfetchedadata['acbal']);
$photo=htmlentities($returnfetchedadata['facerecog']);

?>