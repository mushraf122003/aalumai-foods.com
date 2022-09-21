<?<php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['name'];
$message = $_POST['message'];


$email_form = 'aalimaiwebsite.com';

$email_subject = 'new from submition';

$email_body = "User Name : $name.\n".
               "User Email : $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message : $message .\n";

$to = 'mohamed.mushraf@gmail.com'

$headers = "From : $email_form \r\n"

$headers .= "Reply-to: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers);

header("Location : feedback_af.html");

?>