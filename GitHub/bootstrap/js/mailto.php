<?php
$to      = 'lbailey@bearcubs.santarosa.edu';
$subject = 'Response to DeAnn Contact Form';
/*$message = $_POST['name'] . 'send you comments.  Reply to ' . $_POST['email'] . ' . ';*/
$message = 'Hello' ;
$headers = 'From: lbailey@bearcubs.santarosa.edu' . "\r\n" .
    'Reply-To: lbailey@bearcubs.santarosa.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

