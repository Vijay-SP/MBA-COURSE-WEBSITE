<?php
$message_content = 'Your verification code for login is 1234';
$url = 'http://mysmsshop.in/http-api.php?username=agixinternational&password=Akash@936/*&senderid=ONEESM&route=1&number=8692972646&message='.urlencode($message_content).''; 
sendSMS($url);

function sendSMS($fields) {
	$res = curl_init();
	curl_setopt( $res, CURLOPT_URL, $fields );
	curl_setopt( $res, CURLOPT_RETURNTRANSFER, true ); 
	$result = curl_exec( $res );
	echo $result;   
} 
?>