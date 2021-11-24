<?php
$message_content = 'Dear customer, i am the boss';
$url = 'http://mysmsshop.in/http-api.php?username=agixinternational&password=Navi$$555&senderid=SMSUSE&route=1&number=8652486718&message='.urlencode($message_content).''; 
sendSMS($url);

function sendSMS($fields) {
	$res = curl_init();
	curl_setopt( $res, CURLOPT_URL, $fields );
	curl_setopt( $res, CURLOPT_RETURNTRANSFER, true ); 
	$result = curl_exec( $res );
	echo $result;   
} 
?>