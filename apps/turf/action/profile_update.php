<?php
include("../../connect/db.php");

	
	$Log_Id=$_POST["Log_Id"];
	$cntno=$_POST["cntno"];
	$addr=$_POST["addr"];
	$expr=$_POST["expr"];
	$location=$_POST["location"];
	$password=$_POST["password"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	if($photo=="")
	{
		$sql = "update turf set cntno='$cntno',addr='$addr',expr='$expr',location='$location' where Log_Id='$Log_Id'";
		$q1 = $db->prepare($sql);
		$q1->execute();
	}
	else
	{
		$sql = "update turf set  cntno='$cntno',addr='$addr',expr='$expr',location='$location',photo='$photo' where Log_Id='$Log_Id'";
		$q1 = $db->prepare($sql);
		$q1->execute();
	}
		$sql = "update user set password='$password' where Log_Id='$Log_Id'";
		$q1 = $db->prepare($sql);
		$q1->execute();

	header("location:../index.php");
?>
