<?php



$movieids=strip_tags($_GET['movieid']);
$fetch_moviedata=mysqli_query($benzima,"SELECT * FROM movieslists WHERE id='$movieids'");
$moviedata=mysqli_fetch_array($fetch_moviedata);

$moviename=htmlentities($moviedata['moviename']);
$potrait=htmlentities($moviedata['movieposterportrait']);
$landscape=htmlentities($moviedata['moviepotraitlandscape']);
$video=htmlentities($moviedata['videolink']);
$price=htmlentities($moviedata['movieprice']);
$freeorpaid=htmlentities($moviedata['moviepricingstatus']);
$enableordisable=htmlentities($moviedata['activity']);
$genre=htmlentities($moviedata['moviegenre']);










?>