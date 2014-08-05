<?php
$to = 'lbailey2@aol.com';
$subject = "Testing class example.";
$message = $_POST['customername'] . ' responded using form.';
$headers = 'From: lbailey@mcn.org' . "\r\n" .
    'Reply-To: lbailey@mcn.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>
