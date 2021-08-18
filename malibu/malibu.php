<?php
session_start();



error_reporting(0);
$chicago=mysqli_connect("localhost","root","","fotomax_official");
if(mysqli_connect_errno($chicago))

{


	echo"<span class='btn btn danger' style='color:red; background-color:white; border:3px solid red; border-radius:3px; padding:12px; width:80%; margin-left:10%; margin-right:10%; font-size:22px; font-weight:bold;'> Connection Terminated... </span>";
}


?>




<?php




        function generateRandomString($length = 15) {
    $characters = '-123--456--789--0AB--CDE--FGH--IJK--LMN--OPQ--RST--UVW--XYZ-';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
//usage 
$regsessionkey = generateRandomString(45);
$newloginsessionkey = generateRandomString(90);
$logoutesskeyuser=generateRandomString(75);
$movietockens=generateRandomString(10);
$movietocskens=generateRandomString(50);
?>


<?php

 $search = $_SESSION['search'];
$sesionskeys=$_SESSION['GO585NFTHCT87JTY487YXB7B8NN4NH4HX'];
$destination=$_SESSION['newothervideo'];

?>