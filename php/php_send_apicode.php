<?php
$message_content = 'Dear customer, driver Tanveer';
$url = 'http://mysmsshop.in/http-api.php?username=enterusername&password=enterpassword&senderid=6char-senderid&route=1&number=enternumber&message='.urlencode($message_content).''; 
sendSMS($url);

function sendSMS($fields) {
	$res = curl_init();
	curl_setopt( $res, CURLOPT_URL, $fields );
	curl_setopt( $res, CURLOPT_RETURNTRANSFER, true ); 
	$result = curl_exec( $res );
	echo $result;   
} 
?>