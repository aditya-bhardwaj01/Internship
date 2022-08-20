<?php

include "config/generalMailer.php";

$subject = 'Guest user response';

$body = 
'
Business Name: '.$_POST['businessName'].', 
Website URL: '.$_POST['webUrl'].', 
Stage: '.$_POST['stage'].', 
Industry: '.$_POST['industry'].', 
Business Location: '.$_POST['businessLocation'].', 
Contact Name: '.$_POST['name'].', 
Contact Email: '.$_POST['email'].', 
Contact number: '.$_POST['phone'].', 
Contact role: '.$_POST['role'].', 
Services Interested in: '.$_POST['serviceInterest'].',
';

$target = 'adibhardwaj444@gmail.com';

echo sendMailTo($target, $subject, $body, $_FILES['profile']['tmp_name']);

?>