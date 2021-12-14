<?php
$errors = '';
$myemail = 'mailbox4lw@gmail.com';
if (
    empty($_GET['name'])  ||
    empty($_GET['email']) ||
    empty($_GET['phone']) ||
    empty($_GET['course']) ||
    empty($_GET['city']) ||
    empty($_GET['state']) ||
    empty($_GET['course-type'])
) {
    $errors .= "\n Error: all fields are required";
}
$name = $_GET['name'];
$email_address = $_GET['email'];
$phone = $_GET['phone'];
$course = $_GET['course'];
$city = $_GET['city'];
$state = $_GET['state'];
$course_type = $_GET['course-type'];
if (!preg_match(
    "/ ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $email_address
)) {
    $errors .= "\n Error: Invalid email address";
}
$to_email = "mailbox4lw@gmail.com";
$subject = "New Application for Registration";
$body = "Email is : " . $email_address . "\n" . "Name is :" . $name . "\n" . "Phone is : " . $phone . "\n" . "City is : " . $city . "\n" . "State is : " . $state . "\n" . "Course is :" . $course . "\n" . "Course Type is :" . $course_type;
if (mail($to_email, $subject, $body)) {

    echo '<script type="text/javascript">';
    echo 'alert("Your details have been submitted successfully, You will receive a call back soon !");';
    echo 'window.location.href = "index.html";';
    echo '</script>';
} else {
    echo "<script>alert('Email Not Exists...');</script>";
}
