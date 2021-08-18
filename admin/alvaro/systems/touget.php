<?php


$fetchaboutdata=mysqli_query($benzima,"SELECT * FROM tou");
$about=mysqli_fetch_array($fetchaboutdata);

$mainttitle=htmlentities($about['maintitle']);
$subttitles=htmlentities($about['subtitle']);
$abouttimages=htmlentities($about['image']);
$abouttdescription=htmlentities($about['description']);





?>