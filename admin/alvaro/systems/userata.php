<?php


$uid=strip_tags($_GET['userindex']);



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