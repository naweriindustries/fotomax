<?php
session_start();



error_reporting(0);
$benzima=mysqli_connect("localhost","root","","fotomax_official");
if(mysqli_connect_errno($benzima))

{


	echo"<span class='btn btn danger' style='color:red; background-color:white; border:3px solid red; border-radius:3px; padding:12px; width:80%; margin-left:10%; margin-right:10%; font-size:22px; font-weight:bold;'> Connection Terminated... </span>";
}

$senssions=$_SESSION['LHDSJHFOTOMAXFEIONFNONJDB8Y387TG382OBUIY2IV2I7EZE87Z'];
?>