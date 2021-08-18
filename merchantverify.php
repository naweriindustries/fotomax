


<?php

include("troublecauser.php");


$merchant_key =$merchantsecret; // Enter here your merchant API Key

$merchant_account =$clientmerchant;// Enter Your Merchant Email Address Here
$item_number = $_GET['itemid'];
$useremail = $_GET['payee_email'];

$item_currency = "UGX";//always UGX

$txid = $_GET['transactionid']; // Transaction ID


$verification_link = "http://naweri.xyz/pay/naweriindustriescentraldatabase/?merchant_key=$merchant_key&merchant_account=$merchant_account&txid=$txid";
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$verification_link);
$resultsi=curl_exec($ch);
curl_close($ch);
$resultsi = json_decode($resultsi);
if($resultsi['status']="success") 



{
    //Payment is successful
    //Run your php code here

// Save Your Transaction Information to the database from above data i.e $merchant_account,$item_number e.t.c



  
$fetchsalluserdata=mysqli_query($chicago,"SELECT * FROM allaccounts WHERE acids='$useremail'");
$returnfetchedadatakjdj=mysqli_fetch_array($fetchsalluserdata);

$useriad=htmlentities($returnfetchedadatakjdj['indexkey']);


$findproductid=mysqli_query($chicago,"SELECT * FROM movieslists WHERE id='$item_number'");
$pdtid=mysqli_fetch_array($findproductid);
$pdtpurchasecout=htmlentities($pdtid['purchases']);

$newpurchasecount=($pdtpurchasecout+1);

$updatepurchasecount=mysqli_query($chicago,"UPDATE movieslists SET purchases='$newpurchasecount' WHERE id='$item_number'");

if($updatepurchasecount)

{



//redirect to a new success message page to reduce risk of hack entries




	$txnstatusave="Complete";

	//$savethetxn=mysqli_query($chicago,"INSERT INTO purchases (movieid,userid,reference,status) VALUES('$item_number','$userid','$txid','$txnstatusave')");

	//if($savethetxn)

	{

	//header("location:completesuccess.php");

	}

	

}


	


}





else {




//redirect to new failed message page to prevent hacker entries



	$txnstatusave="Failed";

	$savethetxn=mysqli_query($chicago,"INSERT INTO purchases (movieid,userid,reference,status) VALUES('$item_number','1','$txid','$txnstatusave')");


	if($savethetxn)

	{

header("location:transactionfailed.php");

	}





		
}





?>



