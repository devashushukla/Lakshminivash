<?php
	include_once("config.php");
	session_start();
	$_SESSION['user_email']="";
	unset($_SESSION['user_email']);
	session_destroy();
	header("location:index.php");
?>