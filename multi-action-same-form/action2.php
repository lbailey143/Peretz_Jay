<!doctype html>
<html lang="en-US">
<head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id='result_div'>
<h2>Form submission received!</h2>
    <p >
    <strong>Name:</strong> <?php echo htmlentities($_POST['name']); ?> <br>
    <strong>Email:</strong> <?php echo htmlentities($_POST['email']); ?> <br>
    <strong>Gender:</strong> <?php echo htmlentities($_POST['gender']); ?> <br>
    <strong>Phone:</strong> <?php echo htmlentities($_POST['phone']); ?> <br>
    <strong>Message:</strong> <?php echo htmlentities($_POST['message']); ?>
    </p>
</div>

</body>
</html>
