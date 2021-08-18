<?php


$msgid=strip_tags($_GET['messageid']);
$fetchmessage=mysqli_query($benzima,"SELECT * FROM messages WHERE id='$msgid'");
$newmesaage=mysqli_fetch_array($fetchmessage);

$nmemail=htmlentities($newmesaage['maintitle']);
$nmsubject=htmlentities($newmesaage['subtitle']);
$nmdescription=htmlentities($newmesaage['description']);
$attachmentnm=htmlentities($newmesaage['image']);
$datenm=htmlentities($newmesaage['dateofbirth']);
$nmstatus=htmlentities($newmesaage['status']);












?>