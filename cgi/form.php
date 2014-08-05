<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
  
  $first = $_REQUEST['first'] ;
  $last = $_REQUEST['last'] ;
  
  if (isset($_REQUEST['gender'])) {
	  $gender = $_REQUEST['gender'];
  } else {
	  $gender = NULL; 
  }
  
  $email = $_REQUEST['email'] ;
  
  $fullname = $first . ' ' . $last ;
  
  if ($gender == 'male') {
	  echo '<p><strong>Good Day, Sir!</strong></p>';
  } elseif ($gender == 'female') {
	  echo '<p><strong>Good Day, Madam!</strong></p>';
  } else {
	  echo '<p><em>You forgot to enter your gender!</em></p>';
  }
  
  
  echo "<p>Thank you <strong>$fullname</strong> for submitting your information.<br> We note that your current email address is <strong><em>$email</em></strong>. We will respond shortly.</p>"
  
		
  
?>
</body>
</html>