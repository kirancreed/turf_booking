<?php
include("../../connect/db.php");


	$CLog_Id=$_POST["CLog_Id"];
	$SLog_Id=$_POST["SLog_Id"];
	$cname=$_POST["cname"];
	$caddr=$_POST["caddr"];
	$ccntno=$_POST["ccntno"];
	$scntno=$_POST["scntno"];
	$saddr=$_POST["saddr"];
	$photo=$_POST["photo"];
	$name=$_POST["name"];
	$qty=$_POST["qty"];
	$tot=$_POST["tot"];
	$des=$_POST["des"];
	$dat=$_POST["dat"];
	$desp=$_POST["des"];
	$stats="Pending";
	
	
$sql= "insert into trcart(CLog_Id,SLog_Id,cname,caddr,ccntno,scntno,saddr,photo,name,qty,tot,dat,desp,stats) VALUES ('$CLog_Id','$SLog_Id','$cname','$caddr','$ccntno','$scntno','$saddr','$photo','$name','$qty','$tot','$dat','$desp','$stats')";
$q1 = $db->prepare($sql);
$q1->execute();


header("location:../book_turf.php");


	
?>
