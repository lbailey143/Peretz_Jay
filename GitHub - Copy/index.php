<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Advanced Web Programming with PHP &amp; MySQL</title>
<link href="css_lrb.css" rel="stylesheet" type="text/css">
</head>

<body>

<!-- begin .container -->
<div class="container">

  <!-- Begin .header -->
  <div class="header">Advanced Web Programming ~ Lynn Bailey ~ Section 5250</div>
  <!-- End .header -->
  
  <!-- Begin .sidebar1 -->
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="index.php">about me</a></li>
      <li><a href="hw2.php">hw 2 ~ about you</a></li>
      <li><a href="#">assignment y</a></li>
      <li><a href="#">assignment z</a></li>
      <li><a href="#">final project</a></li>
    </ul>
    <p class="checkers"><a href="http://validator.w3.org/check?uri=referer">Check HTML</a></p>
    <p class="checkers"><a href="http://jigsaw.w3.org/css-validator/check/referer">
    Check CSS</a></p>
    <!-- End .sidebar1 --></div>
    
  <!-- Begin .content -->  
  <div class="content">
    <h1>Just the facts, friends!</h1>
    <p>I&rsquo;m a retired school administrator who just can&rsquo;t seem to get the retirement part right. I&rsquo;m working a 40 hour bridge job, serving on several boards and committees, managing a senior community, and taking SRJC online courses. </p>
    <p>So far I&rsquo;ve taken Photoshop I and II, HTML/CSS A &amp; B, and Dreamweaver I. I&rsquo;m currently enrolled for Adv Web Programming and Flash Animation. I&rsquo;m sure I&rsquo;ll keep taking the Adobe classes until I run out of online classes to take. I live over on the coast, so the online option is excellent for me.</p>

  <!-- Begin PHP -->
<?php
	$centennial = '2046-04-19';
					
	function years ($centennial) {
		return (strtotime ($centennial) - strtotime ('now'))/(60*60*24*365.25) ;
	}
	
	function days ($centennial) {
		return ((strtotime ($centennial) - strtotime ('now'))%(60*60*24*365.25))/(60*60*24) ;
	}
	
	function hours ($centennial) {
		return ((strtotime ($centennial) - strtotime ('now'))%(60*60*24))/(60*60) ;
	}
	
	function minutes ($centennial) {
		return ((strtotime ($centennial) - strtotime ('now'))%(60*60))/(60) ;
	}
	
	function seconds ($centennial) {
		return (strtotime ($centennial) - strtotime ('now'))%(60) ;
	}
	
	$years = years ($centennial) ;
	$years = intval ($years) ;
	
	$days = days ($centennial) ;
	$days = intval ($days) ;
	
	$hours = hours ($centennial) ;
	$hours = intval ($hours) ;
	
	$minutes = minutes ($centennial) ;
	$minutes = intval ($minutes) ;

	$seconds = seconds ($centennial) ;
	$seconds = intval ($seconds) ;
?>
  <!-- End PHP -->

    <p>I won&rsquo;t reveal my age directly, but will tell you that it will be <span class="boldface"><?php echo $years ?></span> years, <span class="boldface"><?php echo $days ?></span> day(s), <span class="boldface"><?php echo $hours ?></span> hour(s), <span class="boldface"><?php echo $minutes ?></span> minute(s), and <span class="boldface"><?php echo $seconds ?></span> second(s) until I celebrate my personal centennial. You are invited to the party!<!-- end .content --></p>
    <p>Refresh this page to verify that the seconds actually do count down!</p>
  </div>
  <!-- End .content -->
  
  <!-- Begin .footer -->
  <div class="footer">
    <p>Lynn Bailey ~ Advanced Web Programming~ Section 5250 ~ Spring 2013</p>
    <p><a href="mailto:lbailey2@aol.com">lbailey2@aol.com</a></p>
  <!-- End .footer --></div>
    
  </div>
  <!-- End .container -->

</body>

</html>
