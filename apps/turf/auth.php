<?php
session_start();
if(!isset($_SESSION['SESS_TURF_ID']) || (trim($_SESSION['SESS_TURF_ID']) == '')) {
	header("location:../");
	exit();
}

?>
