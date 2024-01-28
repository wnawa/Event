<?php 

// Sending contacts registration
$receiver_email = 'email@email.com';

$username = $_POST['user-name'] ; 
$user_email = $_POST['user-email'] ; 
$user_mobile = $_POST['user-mobile'] ; 
$company_name = $_POST['company-name'] ; 

$message = 'Regstration Details: 
* Name: '. $username .' 
* Email: '. $user_email .'
* Mobile: '. $user_mobile .' 
* Company Name: '. $company_name ; 

$email_subject = "MDX Event - New Registration";
$headers = "From: ";

// mail($receiver_email, $email_subject, $message , $headers);

header("Refresh: 0; url=thankyou.html");
?>