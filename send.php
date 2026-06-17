<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

$to = "darbyjahn@gmail.com";
$subject = "Website Contact Form";

$body = "Name: $name\n";
$body .= "Email: $email\n\n";
$body .= $message;

$headers = "From: $email";

if(mail($to, $subject, $body, $headers)){
    echo "message sent!!";
} else {
    http_response_code(500);
    echo "failed";
}
?>