<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Me</title>

<link href="hw1.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">
  <div class="header"><!-- end .header -->Advanced Web Programming ~ Lynn Bailey ~ Section 5250</div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="bootstrap/index.html">Home</a></li>
      <li><a href="hw1.php">About Me</a></li>
      <li><a href="hw2.php">About You</a></li>
      <li><a href="#">Assignment z</a></li>
      <li><a href="#">Final Project</a></li>
    </ul>
    <p class="checkers"><a href="http://validator.w3.org/check?uri=referer">Check HTML</a></p>
    <p class="checkers"><a href="http://jigsaw.w3.org/css-validator/check/referer">
    Check CSS</a></p>
    <p class="center"><img src="lrb.png" width="88" height="169" alt="Lynn Bailey" title="Lynn Bailey"></p>
    </div>
    <!-- end .sidebar1 -->
     
  <div class="content">
    <h1>Just the facts, friends!</h1>
    <p>I'm a retired school administrator who just can't seem to get the retirement part right. I'm working a 40 hour bridge job, serving on several boards and committees, managing a senior community, and taking SRJC online courses. </p>
    <p>So far I've taken Photoshop I and II, HTML/CSS A &amp; B, and Dreamweaver I. I'm currently enrolled for Adv Web Programming and Flash Animation. I'm sure I'll keep taking the Adobe classes until I run out of online classes to take. I live over on the coast, so the online option is excellent for me.</p>
    
<?php
	$centennial = '2046-04-19';
					
	function countdown ($centennial) {
		return (strtotime ($centennial) - strtotime ('now'))/(60*60*24*365.25) ;
	}
	$years = countdown ($centennial) ;
	$years = $years ;
	$years = intval ($years) ;
?>

<?php
	$centennial = '2046-04-19';
					
	function remainder ($centennial) {
		return ((strtotime ($centennial) - strtotime ('now'))%(60*60*24*365.25))/(60*60*24) ;
	}
	$days = remainder ($centennial) ;
	$days = $days ;
	$days = intval ($days) ;
?>

<?php
	$centennial = '2046-04-19';
					
	function hours ($centennial) {
		return ((strtotime ($centennial) - strtotime ('now'))%(60*60*24))/(60*60) ;
	}
	$hours = hours ($centennial) ;
	$hours = $hours ;
	$hours = intval ($hours) ;
?>

<?php
	$centennial = '2046-04-19';
					
	function minutes ($centennial) {
		return ((strtotime ($centennial) - strtotime ('now'))%(60*60))/(60) ;
	}
	$minutes = minutes ($centennial) ;
	$minutes = $minutes ;
	$minutes = intval ($minutes) ;
?>

<?php
	$centennial = '2046-04-19';
					
	function seconds ($centennial) {
		return (strtotime ($centennial) - strtotime ('now'))%(60) ;
	}
	$seconds = seconds ($centennial) ;
	$seconds = $seconds ;
	$seconds = intval ($seconds) ;
?>

      
    <p>I won't reveal my age directly, but will tell you that it will be <span class="boldface"><?php echo $years ?></span> years, <span class="boldface"><?php echo $days ?></span> day(s), <span class="boldface"><?php echo $hours ?></span> hour(s), <span class="boldface"><?php echo $minutes ?></span> minute(s), and <span class="boldface"><?php echo $seconds ?></span> second(s) until I celebrate my personal centennial. You are invited to the party!<!-- end .content --></p>
    <p>Refresh this page to verify that the seconds actually do count down!</p>
  </div>
  <div class="footer">
    <p>Lynn Bailey ~ Advanced Web Programming~ Section 5250 ~ Spring 2013</p>
    <p><a href="mailto:lbailey2@aol.com">lbailey2@aol.com</a></p>
    <!-- end .footer --></div>
<!-- end .container --></div>
</body>
</html>
