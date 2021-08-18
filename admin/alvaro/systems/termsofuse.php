<?php





if(isset($_POST['updatetou']))


{

 $file = $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $folder="../tou/";
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);
   
      
  
$maintitle=mysqli_real_escape_string($benzima,$_POST['title']);
$subtitle=mysqli_real_escape_string($benzima,$_POST['subtitle']);
$aboutimage=md5(mysqli_real_escape_string($benzima,$_POST['image']));
$aboutdata=mysqli_real_escape_string($benzima,$_POST['terms']);

   if(move_uploaded_file($file_loc,$folder.$final_file))
      {
        $aboutimage=$final_file;
      }



$updateaboutdata=mysqli_query($benzima,"UPDATE tou SET maintitle='$maintitle', subtitle='$subtitle', image='$aboutimage', description='$aboutdata'");

if($updateaboutdata)

{


	$termsmessagesuccess="Update Complete";
}


else

{


	$termsmessagedanger="Update Failed";
}











}




















?>