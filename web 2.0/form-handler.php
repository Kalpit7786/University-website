<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['messagee'];

$email_from = 'info@https://6650
580240d391008ddc8944--inquisitive-pasca-da296e.netlify.app/contact';
$email_subject = 'new form submission'

$email_body = "user name: $name .\n".
              "user email: $visitor_email .\n".
              "user subject: $subject .\n".
              "user message: $message .\n".

$to ='panchalkalpit4@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html") ;

?>