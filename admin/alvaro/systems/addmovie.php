<?php




if(isset($_POST['addmovie']))


{





 $filea = $_FILES['potrait']['name'];
    $file_loca = $_FILES['potrait']['tmp_name'];
    $foldera="../potraits/";
    $new_file_namea = strtolower($filea);
    $final_filea=str_replace(' ','-',$new_file_namea);
    $mixenaa=($minse.$final_filea);




 $fileb = $_FILES['landscape']['name'];
    $file_locb = $_FILES['landscape']['tmp_name'];
    $folderb="../landscapes/";
    $new_file_nameb = strtolower($fileb);
    $final_fileb=str_replace(' ','-',$new_file_nameb);
    $mixenab=($minse.$final_fileb);


$moviename=mysqli_real_escape_string($benzima,$_POST['moviename']);
$imagesshda=mysqli_real_escape_string($benzima,$_POST['potrait']);
$imagesshdb=mysqli_real_escape_string($benzima,$_POST['landscape']);
$video=mysqli_real_escape_string($benzima,$_POST['video']);
$price=mysqli_real_escape_string($benzima,$_POST['price']);
$freeorpaid=mysqli_real_escape_string($benzima,$_POST['premiumstatus']);
$enableordisable=mysqli_real_escape_string($benzima,$_POST['status']);
$genre=mysqli_real_escape_string($benzima,$_POST['genre']);


        $imagesshd=$video;
 


if(move_uploaded_file($file_loca,$foldera.$mixenaa))
      {
        $imagesshda=($systemsdomain.'/potraits/'.$mixenaa);
      }
      

      if(move_uploaded_file($file_locb,$folderb.$mixenab))
      {
        $imagesshdb=($systemsdomain.'/landscapes/'.$mixenab);
      }
      


$initupdateproceedure=mysqli_query($benzima,"INSERT INTO movieslists (moviename,movieposterportrait,moviepotraitlandscape,videolink,movieprice,moviepricingstatus,moviegenre,activity)              VALUES('$moviename','$imagesshda','$imagesshdb','$imagesshd','$price','$freeorpaid','$genre','$enableordisable') ");

if($initupdateproceedure)


{


	$movieaddsuccess="Movie Added";
}

else{

	$movieadderror="Movie Not Added";
}

}


?>