<!doctype html>
<html lang="en-US">
<head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id='result_div'>
<h1>Form submission received : Script One!</h1>
    <p >
    Name: <?php echo htmlentities($_POST['name']); ?>
    </p>
    <p>
    Email: <?php echo htmlentities($_POST['email']); ?>
    </p>
    <p>
    Message: <?php echo htmlentities($_POST['message']); ?>
    </p>
</div>

</body>
</html>
