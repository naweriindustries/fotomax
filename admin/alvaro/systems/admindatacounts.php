<?php








$countusers=mysqli_query($benzima,"SELECT * FROM allaccounts");
$usercount=mysqli_num_rows($countusers);

$countnewusers=mysqli_query($benzima,"SELECT * FROM allaccounts WHERE acagestatus='new' ");
$newusercount=mysqli_num_rows($countnewusers);

$countoldusers=mysqli_query($benzima,"SELECT * FROM allaccounts WHERE acagestatus='old' ");
$oldusercount=mysqli_num_rows($countoldusers);

$countactiveusers=mysqli_query($benzima,"SELECT * FROM movieslists WHERE moviepricingstatus='free' ");
$activeusercount=mysqli_num_rows($countactiveusers);

$countblockedusers=mysqli_query($benzima,"SELECT * FROM movieslists WHERE moviepricingstatus='paid' ");
$blockedusercount=mysqli_num_rows($countblockedusers);

$countonlineusers=mysqli_query($benzima,"SELECT * FROM allaccounts WHERE loginstats='yes' ");
$onlineusercount=mysqli_num_rows($countonlineusers);

$countofflineusers=mysqli_query($benzima,"SELECT * FROM allaccounts WHERE loginstats='no' ");
$offlineusercount=mysqli_num_rows($countofflineusers);


$counttxns=mysqli_query($benzima,"SELECT * FROM movieslists");
$txncount=mysqli_num_rows($counttxns);
















$sumtxnbalance=mysqli_query($benzima,"SELECT sum(movieviewcount) AS value_complete FROM movieslists");
$txnbalance=mysqli_fetch_array($sumtxnbalance);
$sumtbal=round(htmlentities($txnbalance['value_complete']));























$countcases=mysqli_query($benzima,"SELECT * FROM genres");
$casecount=mysqli_num_rows($countcases);

$countapireqs=mysqli_query($benzima,"SELECT * FROM purchases");
$apireqcount=mysqli_num_rows($countapireqs);


$countdonss=mysqli_query($benzima,"SELECT * FROM purchases WHERE status='Complete'");
$donscount=mysqli_num_rows($countdonss);






$countpayscs=mysqli_query($benzima,"SELECT * FROM searchterms ");
$paysccount=mysqli_num_rows($countpayscs);







$countmessagess=mysqli_query($benzima,"SELECT * FROM messages");
$messagescount=mysqli_num_rows($countmessagess);






$countmessagesrs=mysqli_query($benzima,"SELECT * FROM messages WHERE status='Read'");
$messagescountr=mysqli_num_rows($countmessagesrs);







$countmessagesus=mysqli_query($benzima,"SELECT * FROM messages WHERE status='Unread'");
$messagescountu=mysqli_num_rows($countmessagesus);













?>