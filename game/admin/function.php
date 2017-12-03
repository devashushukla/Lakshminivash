<?php
function msg_done()
{
?><div class='alert alert-success alert-dismissable fade in'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'><i class="glyphicon glyphicon-remove"></i></a>
		<strong>Success!</strong> <?php echo $_SESSION['msg_done']; unset($_SESSION['msg_done']); ?>
</div><?php	
}
function msg_notdone()
{
	?><div class='alert alert-danger alert-dismissable fade in'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'><i class="glyphicon glyphicon-remove"></i></a>
			<strong>Warning!</strong> <?php echo $_SESSION['msg_notdone']; unset($_SESSION['msg_notdone']); ?>
	</div><?php
}
function sendsms($mobile,$sms)
{
//echo $mobile , $sms ; die;
	$curlHandle = curl_init();
	//$userid="3Amasoft";
	//$password="123456";
	//$senderid="MSSOFT";	

	$sms=urlencode(($sms));
	$apiCallUrl = "http://3ait.mediaalertbox.in/sendsms/sendsms.php?username=3Amasoft&password=123456&type=TEXT&sender=MASOFT&mobile=$mobile&message=$sms";
	//$apiCallUrl = "http://103.247.98.91/API/SendMsg.aspx?uname=".$userid."&pass=".$password."&send=".$senderid."&dest=".$mobile."&msg=".$sms."&priority=1";	
	curl_setopt($curlHandle, CURLOPT_URL, $apiCallUrl); // set the url to fetch
	curl_setopt($curlHandle, CURLOPT_HEADER, 0); // set headers (0 = no headers in result)
	curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1); // type of transfer (1 = to string)
	curl_setopt($curlHandle, CURLOPT_TIMEOUT, 15); // time to wait in seconds
	$content = curl_exec($curlHandle); // Make the call for sending the SMS
	$SEndrep = $content;
	preg_match("/\bSend\b/i", $content);
	curl_close($curlHandle); // Close the connection to Clickatell
	return $SEndrep;
} 
?>