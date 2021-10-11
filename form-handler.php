<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@yourwebsite.com';
$email_subject='submission form';
$email_body="User Name:$name./n".
            "User Email:$visitor-email./n".
			"Subject :$subject./n".
            "User Message:$message./n";	
$to='kalusiyoum526@gmail.com';
$headers="From:$email-From/r/n"	;
$headers.='Replay-To:$visitor_email/r/n';
$mail($to,$email_$subject,$email_body,$headers)	;
$header("Location:contact.html");	
?>