<?php
	include('../../connect/db.php');
	
	$fdbk_id=$_POST["fdbk_id"];
	$reply=$_POST["reply"];
	$rdate=$_POST["rdate"];
	
	
	$stat="Accept";
	

	$sql = "update feedback set reply='$reply',rdate='$rdate',stat='$stat' where fdbk_id='$fdbk_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../feedback_reply.php");
	
?>
