<?php




if(isset($_GET['movie']))

{

$movieids=strip_tags($_GET['movie']);



$fetch_moviedata=mysqli_query($chicago,"SELECT * FROM movieslists WHERE moviename='$movieids'");
$moviedata=mysqli_fetch_array($fetch_moviedata);

$moviename=htmlentities($moviedata['moviename']);
$video=htmlentities($moviedata['videolink']);
// Copy the file from /user/desktop/geek.txt
// to user/Downloads/geeksforgeeks.txt'
// directory

// Store the path of source file

// Store the path of source file


/*-------------------------This activates only the main url protected from hotlink by the .htaccess file------------------------------*/


$destination = 'sample movies/'.$video.'';



$potrait=htmlentities($moviedata['moviepotraitlandscape']);
$landscape=htmlentities($moviedata['moviepotraitlandscape']);
$video=htmlentities($moviedata['videolink']);
$price=htmlentities($moviedata['movieprice']);
$freeorpaid=htmlentities($moviedata['moviepricingstatus']);
$enableordisable=htmlentities($moviedata['activity']);
$genre=htmlentities($moviedata['moviegenre']);
$idofmovie=htmlentities($moviedata['id']);
$movieviews=htmlentities($moviedata['movieviewcount']);


$newmoviecount=($movieviews+1);
$savenewviecountdata=mysqli_query($chicago,"UPDATE movieslists SET movieviewcount='$newmoviecount' WHERE id='$idofmovie'");



/*-------------------------This activates temporary file links ( High server resource usage)  ------------------------------*/



/*


$source = 'sample movies/'.$video.'';

// Store the path of destination file
$destination = 'video/'.$movietocskens.''.$video.'';

// Copy the file from /user/desktop/geek.txt
// to user/Downloads/geeksforgeeks.txt'
// directory
if( !copy($source, $destination) ) {
	
echo "Error Processing Your Video, please Contact Support";


}
else {
		$potrait=htmlentities($moviedata['moviepotraitlandscape']);
$landscape=htmlentities($moviedata['moviepotraitlandscape']);
$video=htmlentities($moviedata['videolink']);
$price=htmlentities($moviedata['movieprice']);
$freeorpaid=htmlentities($moviedata['moviepricingstatus']);
$enableordisable=htmlentities($moviedata['activity']);
$genre=htmlentities($moviedata['moviegenre']);
$idofmovie=htmlentities($moviedata['id']);
$movieviews=htmlentities($moviedata['movieviewcount']);


$newmoviecount=($movieviews+1);
$savenewviecountdata=mysqli_query($chicago,"UPDATE movieslists SET movieviewcount='$newmoviecount' WHERE id='$idofmovie'");



//echo "File has been copied! \n";
}



*/



}

?>