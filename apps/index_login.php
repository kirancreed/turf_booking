<?php
	//Start session
	session_start();
	
	include('connect/db.php');
		
	//Sanitize the POST values
	$email = $_POST['email'];
	$password = $_POST['password'];
	//Create query
	$qryturf= $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Turf'");
	$qryturf->execute();
	$countturf = $qryturf->rowcount();
	
	
	//Check whether the query was successful or not
	$qryshops= $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Shops'");
	$qryshops->execute();
	$countshops = $qryshops->rowcount();
	
	//Check whether the query was successful or not
	$qryrest= $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Restaurant'");
	$qryrest->execute();
	$countrest = $qryrest->rowcount();
	
	//Check whether the query was successful or not
	$qryusr= $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='User'");
	$qryusr->execute();
	$countusr = $qryusr->rowcount();
	//Check whether the query was successful or not
	
	//Check whether the query was successful or not
	$qryadmn= $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Administrator'");
	$qryadmn->execute();
	$countadmn = $qryadmn->rowcount();
	//Check whether the query was successful or not
	if($countturf > 0) {
		//Login Successful
		session_regenerate_id();
		$rowturf = $qryturf->fetch();
		$_SESSION['SESS_TURF_ID'] = $rowturf['Log_Id'];
		session_write_close();
		header("location: turf/index.php");
		exit();
	}
	else if($countshops > 0) {
		//Login Successful
		session_regenerate_id();
		$rowshops = $qryshops->fetch();
		$_SESSION['SESS_SHOPS_ID'] = $rowshops['Log_Id'];
		session_write_close();
		header("location: shops/index.php");
		exit();
	}
	else if($countrest > 0) {
		//Login Successful
		session_regenerate_id();
		$rowrest= $qryrest->fetch();
		$_SESSION['SESS_RESTAURANT_ID'] = $rowrest['Log_Id'];
		session_write_close();
		header("location: restaurant/index.php");
		exit();
	}
	else if($countusr > 0) {
		//Login Successful
		session_regenerate_id();
		$rowusr = $qryusr->fetch();
		$_SESSION['SESS_USER_ID'] = $rowusr['Log_Id'];
		session_write_close();
		header("location: user/index.php");
		exit();
	}	
	else if($countadmn > 0) {
		//Login Successful
		session_regenerate_id();
		$rowadmn = $qryadmn->fetch();
		$_SESSION['SESS_ADMIN_ID'] = $rowadmn['Log_Id'];
		session_write_close();
		header("location: admin/index.php");
		exit();
	}	
	else 
	{
		//Login failed
		echo "<script>alert('Check Username And Password'); window.location='login.php'</script>";
		exit();
	}
?>
