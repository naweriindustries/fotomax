<?php



$purchasecount=mysqli_query($chicago,"SELECT * FROM purchases WHERE userid='$userid' && status='Complete'");
$xcount=mysqli_num_rows($purchasecount);



?>