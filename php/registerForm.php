<?php 
$errors = '';
$myemail = 'omjadhav963@gmail.com';
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['phone']) ||
   empty($_POST['course']))
{
    $errors .= "\n Error: all fields are required";
}
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
if (!preg_match(
"/ ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}
$to_email = "omjadhav963@gmail.com";
$subject = "New Application for Registration";
$body = "Email is : ".$email_address."\n"."Name is :".$name."\n"."Phone is : ".$phone. "\n"."Course is :".$course;
if (mail($to_email, $subject, $body)) {
    //echo "Email successfully sent to $to_email...";
 echo "<script>alert('Email successfully sent to $to_email');</script>";
} 
else {
     echo "<script>alert('Email Not Exists...');</script>";

}
?>