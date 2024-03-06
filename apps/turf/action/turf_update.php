<?php
	include("../../connect/db.php");
	
	$turfrid=$_POST["turfrid"];
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
	
	if($photo=="")
	{
		$sql = "update turf_register set turfrid='$turfrid',licenno='$licenno',cntno='$cntno',location='$location',addr='$addr',capcty='$capcty' ,amnt='$amnt' ,edate='$edate' ,desp='$desp' where turfrid='$turfrid'";
		$q1 = $db->prepare($sql);
		$q1->execute();
	}
	else
	{
		$sql = "update turf_register set turfrid='$turfrid',licenno='$licenno',cntno='$cntno',location='$location',addr='$addr',capcty='$capcty' ,amnt='$amnt',edate='$edate',desp='$desp',photo='$photo' where turfrid='$turfrid'";
		$q1 = $db->prepare($sql);
		$q1->execute();
	}

	header("location:../turf_view.php");
?>
