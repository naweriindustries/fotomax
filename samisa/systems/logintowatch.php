<?php 



if(isset($_POST['logintowatch']))



{





    /* if(empty($_POST["username"])  
      {  
           echo '<script>alert("Email Is Required")</script>';  
      } 
      elseif(empty($_POST["pass"])  
      {  
           echo '<script>alert("Password Is Required")</script>';  
      } 

      else  
      {  */
           $username = mysqli_real_escape_string($chicago, $_POST["username"]);  
           $password = mysqli_real_escape_string($chicago, $_POST["pass"]);
           $redirect=mysqli_real_escape_string($chicago,$_POST['redirect']);  
           $query = "SELECT * FROM 	allaccounts	 WHERE acids = '$username'";  
           $result = mysqli_query($chicago, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["ackey"]))  
                     {  

                     	$newsessionlogkey=$newloginsessionkey;
                     	$savenewkey=mysqli_query($chicago,"UPDATE allaccounts SET ackeynow='$newsessionlogkey',loginstats='yes',acagestatus='old' WHERE acids='$username'");
                     	if($savenewkey)
                     	{

                     		$retrivenewsesskey=mysqli_query($chicago,"SELECT ackeynow FROM allaccounts WHERE acids='$username'");
                     		$fetchseskeydata=mysqli_fetch_array($retrivenewsesskey);

                     		$sesskey=htmlentities($fetchseskeydata['ackeynow']);

                     		$_SESSION['GO585NFTHCT87JTY487YXB7B8NN4NH4HX']=$sesskey;

                     		header("location:$redirect");

                     	}
                           
                     }  
                     else  
                     {  
                          //return false;  
                          $logerror="Access Denied";
                          
                     }  
                }  
           }  
           else  
           {  
                $logerror="Access Denied" ;
           }  
    //  } 





}



?>