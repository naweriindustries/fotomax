<?php


$fetchaboutdatamerchant=mysqli_query($benzima,"SELECT * FROM merchantdata");
$aboutmerchant=mysqli_fetch_array($fetchaboutdatamerchant);

$clientmerchant=htmlentities($aboutmerchant['merchantclient']);
$merchantsecret=htmlentities($aboutmerchant['merchantsecret']);






?>