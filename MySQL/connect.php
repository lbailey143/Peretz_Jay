<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Connect File</title>
</head>

<body>

<?php

$lrbdb = new mysqli("student.santarosa.edu", "lbailey_admin", "RQBsvitJ", "lbailey");
if ($lrbdb->connect_errno) {
    echo "Failed to connect to MySQL: (" . $lrbdb->connect_errno . ") " . $lrbdb->connect_error;
}
echo 'Connected to ' . $lrbdb->host_info . "\n" . "<br>" . "<br>" ;




?>

</body>
</html>