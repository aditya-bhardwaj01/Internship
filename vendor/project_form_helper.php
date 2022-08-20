<?php

include "config/generalMailer.php";
include "config/connection.php";

$subject = 'Guest user response';

$body = 
'
Business Name: '.$_POST['businessName'].', 
Website URL: '.$_POST['webUrl'].', 
Stage: '.$_POST['stage'].', 
Industry: '.$_POST['industry'].', 
Business Location: '.$_POST['businessLocation'].', 
Project Details: '.$_POST['projectPitch'].', 
Contact Name: '.$_POST['name'].', 
Contact Email: '.$_POST['email'].', 
Contact number: '.$_POST['phone'].', 
Contact role: '.$_POST['role'].', 
Services Interested in: '.$_POST['serviceInterest'].',
Offerings: '.$_POST['offering'].',
';

$sql = "SELECT email FROM admin WHERE site_id = $this_site_id";
$res = mysqli_query($conn, $sql);
foreach($res as $row){
    $target = $row['email'];
}

echo sendMailTo($target, $subject, $body, $_FILES['profile']['tmp_name']);

?>