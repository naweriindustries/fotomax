<?php
if(isset($_POST['changepasskeys']))

{



$mail=md5(mysqli_escape_string($benzima,$_POST['newpassword']));


					$passport=md5(mysqli_escape_string($benzima,$_POST['oldpassword']));


					$verifyoldpassword=mysqli_query($benzima,"SELECT * FROM adminsdata WHERE passkey='$passport' ");
					$verifyoldpasskeys=mysqli_num_rows($verifyoldpassword);

					if($verifyoldpasskeys>0)


					{

					

													$updatesessionkey=mysqli_query($benzima,"UPDATE adminsdata SET passkey='$mail'   ");

													if($updatesessionkey)

													{


												$loginpsuccess="Update Complete";

												}


												else

												{

													$loginperror="Update Failed";
												}

											

		}


		else

		{

			$loginperror="Access denied";
		}
			


}

?>