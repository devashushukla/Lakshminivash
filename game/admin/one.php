<?php
 
function SendSMS ($username, $password, $phoneNoRecip, $msgText) {
 
/* Parameters:
   $host - IP address or host name of the NowSMS server
   $port - "Port number for the web interface" of the NowSMS Server
   $username - "SMS Users" account on the NowSMS server
   $password - Password defined for the "SMS Users" account on the NowSMS Server
   $phoneNoRecip - One or more phone numbers (comma delimited) to receive the text message
   $msgText - Text of the message
*/
 
   $fp = "http://3ait.mediaalertbox.in/sendsms/sendsms.php?";

   fwrite($fp, "GET /?Phone=" . rawurlencode($phoneNoRecip) . "&Text=" .
    rawurlencode($msgText) . " HTTP/1.0\n");
   if ($username != "") {
      $auth = $username . ":" . $password;
      $auth = base64_encode($auth);
      fwrite($fp, "Authorization: Basic " . $auth . "\n");
   }
 
   fwrite($fp, "\n");
   $res = "";
   while(!feof($fp)) {
      $res .= fread($fp,1);
   }
   fclose($fp);
 
   return $res;
 
}
/* This code provides an example of how you would call the SendSMS function from within
   a PHP script to send a message.
   The response from the NowSMS server is echoed back from the script.
   $x   = SendSMS("127.0.0.1", 8800, "username", "password", "+44999999999", "Test Message");
   echo $x;
*/
 
?>