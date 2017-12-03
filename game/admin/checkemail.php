<?php
include_once("config.php");
	$user_email	= mysql_real_escape_string($_POST['user_email']);
	$sel 		= "select user_email from signup where user_email='$user_email'";
	$qur 		= mysql_query($sel);
	$num 		= mysql_num_rows($qur);
	$fetch 		= mysql_fetch_assoc($qur)or die(mysql_error());
	if($num)
	{
		echo $fetch['user_email']."*".$num;
	}
	else
	{
		
	}
?>