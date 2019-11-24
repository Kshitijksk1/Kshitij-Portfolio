
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css"  />
    <link href="css/about.css" rel="stylesheet" type="text/css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="JS/test.js" defer></script>
</head>
<body>
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
             <li><a onclick="document.getElementById('login').style.display='block'" style="width:auto;" class="popup">Login</a></li>
            </ul>
          </div>
        </nav>
        <div id="login" class="form1">

                <form class="form-content" action="" method="">
                    <div class="header">
                        <h2>Login </h2>
                        <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close">&times;</span>
                    </div>
                    <hr>
                    <div class="container4">
                        <label><b>User:</b></label>
                        <input type="text" placeholder="Enter Username" required>

                        <label><b>Password:</b></label>
                        <input type="password" placeholder="Enter Password" required>
                        <button type="button" onclick="document.getElementById('login').style.display='none'" id="button1">Close</button>

                        <button type="submit" id="button">Get In</button>

                    </div>
                </form>
            </div>
 
        <div class="wrapper"></div>
        <div class="container2">
        <div class="split s-left">
  			<div class="centered">

    			<h2>About</h2>
    			<p>
    				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			</p>
    		
  			</div>
		</div>
<?php
$db = mysqli_connect('localhost', 'kshitijk_kshitijksk1', 'sandeshkha1', 'kshitijk_Portfolio_db');
$results = mysqli_query($db, "Select * From about");
$row = mysqli_fetch_array($results);

?>
		<div class="split s-right">
  			<div class="centered">
    			<h2>Basic Information</h2>
    			<p>
    				<strong>AGE:</strong> <?php echo $row['Age']; ?>
    				<br>
    				<br>
    				<strong>EMAIL:</strong> <?php echo $row['Email']; ?>
    				<br>
    				<br>
    				<strong>PHONE:</strong> <?php echo $row['Phone_no']; ?>
    				<br>
    				<br>
    				<strong>ADDRESS:</strong> <?php echo $row['address']; ?>
    				<br><br>
    				<strong>LANGUAGE:</strong> <?php echo $row['Languages']; ?>
    			</p>
   		 	
  			</div>
		</div>
	</div>
</div>
</body>
</html>