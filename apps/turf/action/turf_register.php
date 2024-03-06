<?php
	include("../../connect/db.php");
	
	$Log_Id=$_POST["Log_Id"];
	$name=$_POST["name"];
	$licenno=$_POST["licenno"];
	$cntno=$_POST["cntno"];
	$location=$_POST["location"];
	$addr=$_POST["addr"];
	$capcty=$_POST["capcty"];
	$amnt=$_POST["amnt"];
	$edate=$_POST["edate"];

	$desp=$_POST["desp"];
	
	
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	

	$sql = "insert into turf_register(Log_Id,name,licenno,cntno,location,addr,capcty,amnt,edate,photo,desp)values('$Log_Id','$name','$licenno','$cntno','$location','$addr','$capcty','$amnt','$edate','$photo','$desp')";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../turf_view.php");
?>
