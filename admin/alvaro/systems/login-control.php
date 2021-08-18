<?php
if(isset($_POST['login']))

{



$mail=mysqli_escape_string($benzima,$_POST['email']);

$maildetremaninat=mysqli_query($benzima,"SELECT * FROM adminsdata WHERE username='$mail'");
	$returncount=mysqli_num_rows($maildetremaninat);
		if($returncount>0)


		{
					$passport=mysqli_escape_string($benzima,$_POST['password']);








while($row = mysqli_fetch_array($maildetremaninat))  
                {  






                	  if(password_verify($passport, $row["passkey"]))  
                     { 




                     	$id=htmlentities($row['id']);


                     		$updatesessionkey=mysqli_query($benzima,"UPDATE adminsdata SET sessionkey='$logonadminsessions' WHERE id='$id' ");

													if($updatesessionkey)

													{


													$_SESSION['LHDSJHFOTOMAXFEIONFNONJDB8Y387TG382OBUIY2IV2I7EZE87Z']=$logonadminsessions;

													header("location:index.php");

												}









}



								else 

								{

									$loginerror="Invalid Password";
								}




                }













}


else{


				$loginerror="Invalid User Name";
			}







}




					//-----------------------------------------------------------------------------------------------------------------





?>