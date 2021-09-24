<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_form = 'madk.web@gmail.com'

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

$to = "mckoost@gmail.com";

$headers = "From: $email_form \r\n";

$headers .= "Reply-to: $visito_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");


?>