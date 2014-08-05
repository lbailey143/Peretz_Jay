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
    <h1>Here's the part from last time that was "About me"</h1>
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
    
    <h2>Now, let's find out your age in the same sneaky way!</h2>
    <p>(Only the PHP genie will see your actual info.  Everyone else will have to do the math._</p>
 
 
 <form action="" method="post" name="about_you">
 <fieldset><legend>Your Info</legend>
 <label>Name</label>&nbsp;<input name="name" type="text" value="first only"><br>
 <label>Birthdate</label>&nbsp;<input name="birthdate" type="text" value="yyyy-mm-dd">
 </fieldset>
 <input name="submit" type="submit" value="Submit">
 </form>
 
  <?php
   
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {

/*Start YOUR Centennial*/		
	function age_you($birthdate) {
	return (strtotime($birthdate) + (60*60*24*365.25*100) - strtotime('now'));
	}	

	$centennial_you = age_you($_POST['birthdate']);
			
	$name_you = $_POST['name'];
					
	function years_you ($centennial_you) {
		return (strtotime ($centennial_you) - strtotime ('now'))/(60*60*24*365.25) ;
	}
	
	function days_you ($centennial_you) {
		return ((strtotime ($centennial_you) - strtotime ('now'))%(60*60*24*365.25))/(60*60*24) ;
	}
	
	function hours_you ($centennial_you) {
		return ((strtotime ($centennial_you) - strtotime ('now'))%(60*60*24))/(60*60) ;
	}
	
	function minutes_you ($centennial_you) {
		return ((strtotime ($centennial_you) - strtotime ('now'))%(60*60))/(60) ;
	}
	
	function seconds_you ($centennial_you) {
		return (strtotime ($centennial_you) - strtotime ('now'))%(60) ;
	}
	
	$years_you = years_you ($centennial_you) ;
	$years_you = intval ($years_you) ;
	
	$days_you = days_you ($centennial_you) ;
	$days_you = intval ($days_you) ;
	
	$hours_you = hours_you ($centennial_you) ;
	$hours_you = intval ($hours_you) ;
	
	$minutes_you = minutes_you ($centennial_you) ;
	$minutes_you = intval ($minutes_you) ;

	$seconds_you = seconds_you ($centennial_you) ;
	$seconds_you = intval ($seconds_you) ;
					
/*End YOUR Centennial*/		
 ?>
 <div id="you">
 <?php
 echo $age;
 ?><br>
 <?php
 echo $age_you;
 ?>
 <p>Thank you, <span class="boldface"><?php echo $name_you ?></span>. It will be <span class="boldface"><?php echo $years_you ?></span> years, <span class="boldface"><?php echo $days_you ?></span> day(s), <span class="boldface"><?php echo $hours_you ?></span> hour(s), <span class="boldface"><?php echo $minutes_you ?></span> minute(s), and <span class="boldface"><?php echo $seconds_you ?></span> second(s) until YOU celebrate your personal centennial. Am I invited to the party?</p>
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
