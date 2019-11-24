<!DOCTYPE html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Portfolio</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/styles.css" rel="stylesheet" type="text/css"  />
		<link href="css/skills.css" rel="stylesheet" type="text/css"  />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="JS/test.js" defer></script>
	</head>
	<body >

		<div class="container1">
		<nav class="navbar1">
          <div class="left"><a href="index1.html">Kshitij S Khaladkar</a></div>
          <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </a>
          <div class="right">
            <ul>
              <li><a href="about.php">About</a></li>
              <li><a href="skills.php">Skills</a></li>
              <li><a href="education.php">Education</a></li>
              <li><a href="portfolio.html">Portfolio</a></li>
              <li><a href="experience.php">Experience</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="hireme.html">Hire Me</a></li>
              <li><a href="blogs.html">Blog</a></li>
              <li><a href="#login">Login</a></li>
            </ul>
          </div>
        </nav>        

<?php
$db = mysqli_connect('localhost', 'kshitijk_kshitijksk1', 'sandeshkha1', 'kshitijk_Portfolio_db');
$results1 = mysqli_query($db, "Select * From skills Where skill_name = 'HTML' ");
$results2 = mysqli_query($db, "Select * From skills Where skill_name = 'CSS' ");
$results3 = mysqli_query($db, "Select * From skills Where skill_name = 'Javascript' ");
$results4 = mysqli_query($db, "Select * From skills Where skill_name = 'PHP' ");
$results5 = mysqli_query($db, "Select * From skills Where skill_name = 'C' ");
$results6 = mysqli_query($db, "Select * From skills Where skill_name = 'Java' "); 
$row1 = mysqli_fetch_array($results1);
$row2 = mysqli_fetch_array($results2);
$row3 = mysqli_fetch_array($results3);
$row4 = mysqli_fetch_array($results4);
$row5 = mysqli_fetch_array($results5);
$row6 = mysqli_fetch_array($results6);


?>
        
        <div class="wrapper" id="box">
    		<div class="container2">
		<h4>Professional Skills</h4>
		<div class="split s-left">
		<div class="centered">
			<p><h3><?php echo $row1['skill_name'];?></h3></p>
			<p><strong><?php echo $row1['skill_percent'];?></strong></p>
			<div class="container-sk">
				<div class="skills html"> <?php echo $row1['skill_percent'];?></div>
				</div>
		
		
			<p><h3><?php echo $row2['skill_name'];?></h3></p>
			<p><strong><?php echo $row2['skill_percent'];?></strong></p>
			<div class="container-sk">
				<div class="skills css"> <?php echo $row2['skill_percent'];?></div>
				</div>
		
		
			<p><h3><?php echo $row3['skill_name'];?></h3></p>
			<p><strong><?php echo $row3['skill_percent'];?></strong></p>
			<div class="container-sk">
				<div class="skills js" > <?php echo $row3['skill_percent'];?></div>
				</div>
		</div>
	
	</div>
	<div class="split s-right">
		<div class="centered">
			<p><h3><?php echo $row4['skill_name'];?></h3></p>
			<p><strong><?php echo $row4['skill_percent'];?></strong></p>
			<div class="container-sk">
				<div class="skills php" > <?php echo $row4['skill_percent'];?></div>
				</div>
		
		
			<p><h3><?php echo $row5['skill_name'];?></h3></p>
			<p><strong><?php echo $row5['skill_percent'];?></strong></p>
			<div class="container-sk">
				<div class="skills c" > <?php echo $row5['skill_percent'];?></div>
				</div>
		
		
			<p><h3><?php echo $row6['skill_name'];?></h3></p>
			<p><strong><?php echo $row6['skill_percent'];?></strong></p>
			<div class="container-sk">
				<div class="skills java" > <?php echo $row6['skill_percent'];?></div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>