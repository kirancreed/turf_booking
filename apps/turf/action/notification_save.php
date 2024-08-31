<?php
	include("../../connect/db.php");

	$notifid=$_POST["notifid"];
	$name=$_POST["name"];
	$contno=$_POST["contno"];
	$subj=$_POST["subj"];
	$descprt=$_POST["descprt"];
	$sdate=$_POST["sdate"];
	$ddate=$_POST["ddate"];
	
	$sql = "insert into notification(notifid,name,contno,subj,descprt,sdate,ddate)values('$notifid','$name','$contno','$subj','$descprt','$sdate','$ddate')";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../notification_search.php");
?>
