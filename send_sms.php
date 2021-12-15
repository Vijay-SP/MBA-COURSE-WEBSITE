<?php
$OTP = rand(00000, 99999);
session_start();
$_SESSION['__OTP'] = $OTP;
$name = $_POST['name'];
$email_address = $_POST['email'];
$course = $_POST['course'];
$course_type = $_POST['course-type'];
$mobile_number = $_POST['phone'];
$message_content = 'Your verification code for login is ' . $OTP . '';
$url = 'http://mysmsshop.in/http-api.php?username=agixinternational&password=Akash@936/*&senderid=ONEESM&route=1&number=' . $mobile_number . '&message=' . urlencode($message_content) . '';
sendSMS($url);
function sendSMS($fields)
{
	$res = curl_init();
	curl_setopt($res, CURLOPT_URL, $fields);
	curl_setopt($res, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($res);
	$newotp = base64_encode($_SESSION['__OTP']);
	header("location:verify_sms.php?pwd=" . $newotp . "&name=" . $_POST['name'] . "&email=" . $_POST['email'] . "&phone=" . $_POST['phone'] . "&course=" . $_POST['course'] . "&course-type=" . $_POST['course-type'] . "&city=" . $_POST['city']);
}
