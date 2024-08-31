<?php
include('connect/db.php');


	$Log_Id="TRF".rand(789645002,0);
	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$cntno=$_POST["cntno"];
	$password=$_POST["password"];
	$utype=$_POST["utype"];
	
	$date=date("Y-m-d");
	
	$sql = "insert into user(Log_Id,name,email,password,utype,cntno) VALUES ('$Log_Id','$name','$email','$password','$utype','$cntno')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	
	if($utype=="Turf")
	{
	$sql = "insert into turf(Log_Id,name,email,date,cntno) VALUES ('$Log_Id','$name','$email','$date','$cntno')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	if($utype=="Shops")
	{
	$sql = "insert into shops(Log_Id,name,email,date,cntno) VALUES ('$Log_Id','$name','$email','$date','$cntno')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	if($utype=="Restaurant")
	{
	$sql = "insert into restaurant(Log_Id,name,email,date,cntno) VALUES ('$Log_Id','$name','$email','$date','$cntno')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	if($utype=="User")
	{
	$sql = "insert into customer(Log_Id,name,email,date,cntno) VALUES ('$Log_Id','$name','$email','$date','$cntno')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	}
	header("location:index.php");

?>						
