<?php


$fetchaboutdata=mysqli_query($benzima,"SELECT * FROM aboutus");
$about=mysqli_fetch_array($fetchaboutdata);

$maintitle=htmlentities($about['maintitle']);
$subtitles=htmlentities($about['subtitle']);
$aboutimages=htmlentities($about['aboutimage']);
$aboutdescription=htmlentities($about['description']);





?>