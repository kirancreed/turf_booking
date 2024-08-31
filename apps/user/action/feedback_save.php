<?php
	include('../../connect/db.php');
	
	$Log_Id=$_POST["Log_Id"];
	$fname=$_POST["fname"];
	$contactno=$_POST["contactno"];
	$subj=$_POST["subj"];
	$despc=$_POST["despc"];
	$date=$_POST["date"];
	
	$stat="Pending";
	

	$sql = "insert into feedback(Log_Id,fname,contactno,subj,despc,stat,date)values('$Log_Id','$fname','$contactno','$subj','$despc','$stat','$date')";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../feedback_view.php");
	
?>
