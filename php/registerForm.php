<?php 

$email=$_GET['email'];
$name=$_GET['name'];
$phone=$_GET['phone'];

 			$to_email = "omjadhav963@gmail.com";
			$subject = "Your New credentials for";
			$body = "Your username is : ".$email."\n"."Your name is :".$name."\n"."Phone : ".$phone;
			if (mail($to_email, $subject, $body)) {
			    //echo "Email successfully sent to $to_email...";
             echo "<script>alert('Email successfully sent to $to_email');</script>";
			} 
			else {
			     echo "<script>alert('Email Not Exists...');</script>";

			}
 ?>