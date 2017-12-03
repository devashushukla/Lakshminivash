<?php
	include_once('config.php');
	$db= new db();
	$result = $db->getAll('select * from final_billing_table');
	echo "<pre>";
	print_r($result);
	die();
?>