<?php
$name = $_post["nmae"];
$vistor_email = $_post["email"];
$message =$_post["message"];

$email_form ='aggrandize.starlord.official@gmail.com';

$email_subject ="New Form Submission";

$email_body = "User Name: $name.\n".
               "User Email: $vistor_email.\n".
                "User Message: $message.\n";

$to = "aggrandize.starlord.official@gmail.com";

$headers = "From: $email_form \r\n";

$headers ="Reply-To: $vistor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index3.html");

?>