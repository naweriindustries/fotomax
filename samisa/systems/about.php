<?php



$getaboutdataand=mysqli_query($chicago,"SELECT * FROM aboutus ");
$aboutdataand=mysqli_fetch_array($getaboutdataand);


$emaintext=htmlentities($aboutdataand['maintitle']);
$esubtext=htmlentities($aboutdataand['subtitle']);
$eabouttext=htmlentities($aboutdataand['description']);
$eaboutimagea=htmlentities($aboutdataand['aboutimage']);
?>