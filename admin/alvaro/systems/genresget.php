<?php


$genreids=strip_tags($_GET['instantid']);
$fetchaboutdatamerchant=mysqli_query($benzima,"SELECT * FROM genres WHERE id='$genreids' ");
$aboutmerchant=mysqli_fetch_array($fetchaboutdatamerchant);

$genre=htmlentities($aboutmerchant['gnrename']);
$genrestatus=htmlentities($aboutmerchant['status']);







?>