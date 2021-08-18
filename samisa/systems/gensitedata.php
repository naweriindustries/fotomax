<?php


$getgensysdata=mysqli_query($chicago,"SELECT * FROM general_system_data");
$returndata=mysqli_fetch_array($getgensysdata);


$sname=htmlentities($returndata['sitename']);
$sabr=htmlentities($returndata['siteabr']);
$sconame=htmlentities($returndata['coname']);
$sdesc=htmlentities($returndata['sitedesc']);
$skeys=htmlentities($returndata['sitekeys']);
$slogo=htmlentities($returndata['sitelogo']);
$sid=htmlentities($returndata['siteindexdesktop']);
$sim=htmlentities($returndata['siteindexmobi']);
$sli=htmlentities($returndata['siteloginimage']);
$sri=htmlentities($returndata['siteregimage']);
$fpi=htmlentities($returndata['forgotpassimage']);
$pai=htmlentities($returndata['payapiimage']);
$sf=htmlentities($returndata['sitefavicon']);



?>