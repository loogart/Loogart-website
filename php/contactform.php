<?php

// basic settings section
$sendto ='chris@loogart.com';
$subject = 'Loogart.com message';

// cleaning the post variables
function clean_var($variable) {$variable = strip_tags(stripslashes(trim(rtrim($variable))));return $variable;}

// all is good, send e-mail
$plsubject = "=?utf-8?B?".base64_encode($subject)."?=";
$msg = "Name: " . clean_var($_REQUEST['first_name']) . "\n";
$msg .= "E-mail: " . clean_var($_REQUEST['email']) . "\n";
$msg .= "Message: \n\n" . clean_var($_REQUEST['comment']);

// email format header
$header = "Content-type: text/plain; charset=utf-8\r\n";
$header .= 'From:'. clean_var($_REQUEST['email']);

// email content
mail($sendto, $plsubject, $msg, $header);

// following email send, bring user back to this page
header("Location: http://v2.loogart.com#thankyou");

die();
?>