<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thank You</title>
</head>

<body>
<?php
  $first_name = 'Lynn' ;
  $last_name = 'Bailey' ;
  $fullname = $first_name . ' ' . $last_name ;
  $address = 'PO Box 341' ;
  $city = 'Gualala' ;
  $state = 'CA' ;
  $zip = '95445' ;
  $addr = $address . ', ' . $city . ', ' . $state . ' ' . $zip ;
  $n = 10/3 ;
  $n = round ($n, 3) ;
  
  $n2 = 45000 ;
  $n2 = number_format ($n2, 2) ;
  
  $quantity = 25 ;
  $cost = 42.95 ;
  $tax = .0675 ;
  $total = $quantity * $cost ;
  $total = $total + ($total * $tax) ;
  $total = number_format ($total, 2);
  define (NAME, 'Lynn Bailey') ;
  define (AGE, '67');
  define (TODAY, 'Friday, January 25, 2013') ;
  
  echo "<p>My name is $fullname,<br>
  		and you can send me regular mail at the following address: <br>
		$addr.</p>" ; 
  echo "$n <br>" ;
  echo "$n2 <br>" ;
  echo "<p>You are purchasing $quantity widgets at a unit price of $ $cost each, with Mendocino County sales tax at the rate of $tax for a total of $ $total. </p>" ;
  
  echo NAME . ' is ' . AGE . ' years old.<br>';
  echo '<p>Today is ' . TODAY . '.  You are using PHP version ' . PHP_VERSION . ' on the ' . PHP_OS . ' operating system. </p>' ;
  
  
  
		
  
?>
</body>
</html>