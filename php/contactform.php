<?php

// basic settings section
$sendto ='chris@loogart.com';
$subject = 'Loogart.com message';

// all is good, send e-mail
$plsubject = "=?utf-8?B?".base64_encode($subject)."?=";
$msg = "Name: " . $_REQUEST['first_name'] . "\n";
$msg .= "Subject: " . $_REQUEST['subject'] . "\n";
$msg .= "E-mail: " . $_REQUEST['email'] . "\n";
$msg .= "Message: \n\n" . $_REQUEST['comment'];

// email format header
$header = "MIME-Version: 1.0" . "\r\n";
$header .= "Content-type: text/plain; charset=utf-8\r\n";
$header .= 'From:'. $_REQUEST['email'];


// email content
mail($sendto, $plsubject, $msg, $header);

// following email send, bring user back to this page
//header("Location: http://v2.loogart.com#thankyou");
header('Location: /index.html#thankyou');  
die();
?>