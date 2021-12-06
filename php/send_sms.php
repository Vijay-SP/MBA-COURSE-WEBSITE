<?php
$OTP = rand(00000,99999);
session_start();
$_SESSION['__OTP'] = $OTP;
$mobile_number = $_POST['phone'];
$message_content = 'Your verification code for login is '.$OTP.'';
$url = 'http://mysmsshop.in/http-api.php?username=agixinternational&password=Akash@936/*&senderid=ONEESM&route=1&number='.$mobile_number.'&message='.urlencode($message_content).''; 
sendSMS($url);
function sendSMS($fields) {
	$res = curl_init();
	curl_setopt( $res, CURLOPT_URL, $fields );
	curl_setopt( $res, CURLOPT_RETURNTRANSFER, true ); 
	$result = curl_exec( $res );
	echo $result."<script>alert('OTP sent successfully')</script>";   
} 

$errors = '';
$myemail = 'mailbox4lw@gmail.com';
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['phone']) ||
   empty($_POST['course']) ||
empty($_POST['course-type']))
{
    $errors .= "\n Error: all fields are required";
}
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
$course_type =$_POST['course-type'];
if (!preg_match(
"/ ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}
$to_email = "mailbox4lw@gmail.com";
$subject = "New Application for Registration";
$body = "Email is : ".$email_address."\n"."Name is :".$name."\n"."Phone is : ".$phone. "\n"."Course is :".$course ."\n"."Course Type is :".$course_type; 
if (mail($to_email, $subject, $body)) {
    //echo "Email successfully sent to $to_email...";
 echo "<script>alert('Email successfully sent to $to_email');</script>";
} 
else {
    echo "<script>alert('Email Not Exists...');</script>";
}
?>