<?php
$to = 'lbailey@mcn.org';
$subject = "Testing DeAnn Feedback Form.";
$message = 'Response using form.';
$headers = 'From: lbailey@mcn.org' . "\r\n" .
    'Reply-To: lbailey@mcn.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>
