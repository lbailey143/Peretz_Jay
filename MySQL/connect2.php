<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Connect File</title>
</head>

<body>

<?php

$lrbdb2 = new mysqli("student.santarosa.edu", "lbailey_admin", "RQBsvitJ", "lbailey");
if ($lrbdb2->connect_errno) {
    echo "Failed to connect to MySQL: (" . $lrbdb2->connect_errno . ") " . $lrbdb2->connect_error;
}
echo 'Connected to ' . $lrbdb2->host_info . "\n" . "<br>" . "<br>" ;




?>

</body>
</html>