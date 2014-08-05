<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>hw2 ~ about me ~ about you</title>
<link href="hw2.css" rel="stylesheet" type="text/css">
</head>

<body>


<!-- begin .container -->
<div class="container">

  <!-- Begin .header -->
  <div class="header">hw2 ~ about me ~ about you</div>
  <!-- End .header -->
  
  <!-- Begin .sidebar1 -->
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
    <p>&nbsp;</p>
    <p class="center"><img src="lrb.png" width="88" height="169" alt="Lynn Bailey" title="Lynn Bailey"></p>
    <!-- End .sidebar1 --></div>
    
  <!-- Begin .content -->  
  <div class="content">
    <h2>Here's the part from last time that was "About me"</h2>
    <p>I&rsquo;m a retired school administrator who just can&rsquo;t seem to get the retirement part right. I&rsquo;m working a 40 hour bridge job, serving on several boards and committees, managing a senior community, and taking SRJC online courses. </p>
    

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
    
    <h2>Now, let's find out your age in the same sneaky way!</h2>
    <p>(Only the PHP genie will see your actual info.  Everyone else will have to do the math.)</p>
 
 
 
<form method="post"> 
<fieldset><legend>Your Info</legend>
 <label>Name</label>&nbsp;<input name="name" type="text" value="first name"><br>
 <label>Birthdate</label>&nbsp;<input name="birthdate" type="text" value="yyyy-mm-dd">
 </fieldset>
 <input name="submit" type="submit" value="Submit"></form>
 
 
  <?php
   
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {

/*Start YOUR Centennial*/

	$name_you = $_POST['name'];
	
	function totseconds($birthdate) {
	return strtotime($birthdate) - strtotime('now');
	}	
	// assign the result of calling the age( ) function passing the input date as the argument to a variable
	$totseconds = (totseconds($_POST['birthdate'])+(3600*24*36525));
	
	$years_you = $totseconds/(3600*24*365.25);
	$years_you = intval ($years_you) ;		
	
	$days_you = $totseconds % (3600*24*365.25);
	$days_you = $days_you/(60*60*24);
	$days_you = intval ($days_you) ;
	
	$hours_you = $totseconds % (3600*24);
	$hours_you = $hours_you/(60*60) ;
	$hours_you = intval ($hours_you) ;
	
	$minutes_you = $totseconds % (60*60);
	$minutes_you = $minutes_you/(60) ;
	$minutes_you = intval ($minutes_you) ;

	$seconds_you = $totseconds % (60) ;
	$seconds_you = intval ($seconds_you) ;
					
/*End YOUR Centennial*/		
 ?>
 <div id="you">
 
 <p>Thank you, <span class="boldface"><?php echo $name_you ?></span>. It will be <span class="boldface"><?php echo $years_you ?></span> years, <span class="boldface"><?php echo $days_you ?></span> day(s), <span class="boldface"><?php echo $hours_you ?></span> hour(s), <span class="boldface"><?php echo $minutes_you ?></span> minute(s), and <span class="boldface"><?php echo $seconds_you ?></span> second(s) until YOU celebrate your personal centennial. Am I invited to the party?</p>
 <p>You can try additional birthdates above without refreshing the page.</p>
 </div>	
		
 <?php		
    }
    
 ?> 
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
