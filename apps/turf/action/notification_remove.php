<?php
include("../../connect/db.php");
	
	$notid=$_GET["notid"];

	
	$sql = "delete from notification where notid='$notid'";
	$q1 = $db->prepare($sql);
	$q1->execute();

	header("location:../notification_remove.php");
	
?>
