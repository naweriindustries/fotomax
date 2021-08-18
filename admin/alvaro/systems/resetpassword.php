
<?php



if(isset($_POST['updateresetimage']))

{





 $file = $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $folder="../resetpass/";
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);
   
      
    $imagesshd=md5(mysqli_real_escape_string($benzima,$_POST['image']));

   if(move_uploaded_file($file_loc,$folder.$final_file))
      {
        $imagesshd=$final_file;
      }

  

  
 
  //update system here

        
  //update system here

        $updatesystemsnow=mysqli_query($benzima,"UPDATE general_system_data SET forgotpassimage='$imagesshd'");

if($updatesystemsnow)

{

	$indexresetsuccess="System Image Updated Successfully...";
	
}


else


{


	$indexresetdanger="System Image Update Failure...";
	
}



}



?>