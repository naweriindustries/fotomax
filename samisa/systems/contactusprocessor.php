<?php



if(isset($_POST['send']))


{





 $file = $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $folder="contactimages/";
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);
   
    $image=mysqli_escape_string($chicago,$_POST['image']);
  
    if(move_uploaded_file($file_loc,$folder.$final_file))
      {
        $image=$final_file;
      }

  //update system here

        
   


	$email=mysqli_real_escape_string($chicago,$_POST['email']);
	$subject=mysqli_real_escape_string($chicago,$_POST['subject']);
	$description=mysqli_real_escape_string($chicago,$_POST['message']);

	$status="unread";




	$insterrealaccessdata=mysqli_query($chicago,"INSERT INTO messages(maintitle,subtitle,description,image,status) VALUES('$email','$subject','$description','$image','$status')");

	if($insterrealaccessdata)


	{

		$messagesent="Message Delivered, We'll get Back To You...";



	}

	else {


		$sendfailed="Message Not Sent, Contact +256 751021147 For Assistance";


	}

}


?>