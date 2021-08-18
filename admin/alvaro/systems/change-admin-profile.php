<?php
if(isset($_POST['changepassusername']))

{



$mail=mysqli_escape_string($benzima,$_POST['usernamed']);


					$passport=md5(mysqli_escape_string($benzima,$_POST['password']));
					
					
					$verifyoldpassword=mysqli_query($benzima,"SELECT * FROM adminsdata WHERE  passkey='$passport' ");
					$verifyoldpasskeys=mysqli_num_rows($verifyoldpassword);

					if($verifyoldpasskeys>0)


					{

					

													$updatesessionkey=mysqli_query($benzima,"UPDATE adminsdata SET username='$mail' WHERE   passkey='$passport'  ");

													if($updatesessionkey)

													{


												$loginsuccess="Update Complete";

												}


												else

												{

													$loginerror="Update Failed";
												}

											

		}


		else

		{

			$loginerror="Access Denied";
		}
			


}

?>