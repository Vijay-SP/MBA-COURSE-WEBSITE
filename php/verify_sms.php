<?php 
session_start();
$OTP = $_SESSION['__OTP'];
$UserOTP = $_GET['otp'];
if ($OTP == $UserOTP){
    echo 1;
}else{
    echo 0;
}
?>