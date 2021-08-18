<?php





if(isset($_POST['updateaboutdata']))


{

 $file = $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $folder="../aboutdataimage/";
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);
   
      
  
$maintitle=mysqli_real_escape_string($benzima,$_POST['maintitle']);
$subtitle=mysqli_real_escape_string($benzima,$_POST['subtitle']);
$aboutimage=md5(mysqli_real_escape_string($benzima,$_POST['image']));
$aboutdata=mysqli_real_escape_string($benzima,$_POST['about']);

   if(move_uploaded_file($file_loc,$folder.$final_file))
      {
        $aboutimage=$final_file;
      }



$updateaboutdata=mysqli_query($benzima,"UPDATE aboutus SET maintitle='$maintitle', subtitle='$subtitle', aboutimage='$aboutimage', description='$aboutdata'");

if($updateaboutdata)

{


	$aboutsuccess="Update Complete";
}


else

{


	$abouterror="Update Failed";
}











}




















?>