<?php
// check if fields passed are empty
if(empty($_POST['user_name'])  		||
   empty($_POST['user_phone']) 		||
   empty($_POST['user_email']) 		||
   empty($_POST['user_message'])	||
   !filter_var($_POST['user_email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email_address = $_POST['user_email'];
$message = $_POST['user_message'];
	
// create email body and send it	
$to = 'your-email@your-domain.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Modern Business Contact Form:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>