<?php 
$name=$_POST['name'];
$visitor_email=$_POST['name'];
$message=$_POST['message'];



$email_from = "$visitor_email.\n";

$email_subject = 'New form submission';

$email_body = "User name:$name.\n".
                 "User E-mail:$visitor_email.\n".
                   "User message:$message.\n";


$to = "gamergearyt@gmail.com"

$headers = "From:$email_from \r\n";

$headers .= "Reply-To:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");

?>