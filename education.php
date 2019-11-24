<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css"  />
     <link href="css/experience.css" rel="stylesheet" type="text/css"  />
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
              <li><a onclick="document.getElementById('login').style.display='block'" style="width:auto;" class="popup">Login</a></li>
              <li><a onclick="document.getElementById('signup').style.display='block'" style="width:auto;" class="popup">Sign Up</a></li>
            </ul>
          </div>
        </nav>
        <div id="login" class="form">

                <form class="form-content" action="connectivity-login.php" method="POST">
                    <div class="header">
                        <h2>Login </h2>
                        <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close">&times;</span>
                    </div>
                    <hr>
                    <div class="container4">
                        <label><b>Email:</b></label>
                        <input type="text" placeholder="Enter Username" name="email" required>

                        <label><b>Password:</b></label>
                        <input type="password" placeholder="Enter Password" name="pass" required>
                        <button type="button" onclick="document.getElementById('login').style.display='none'" id="button1">Close</button>

                        <button type="submit" name="submit" id="button">Get In</button>

                    </div>
                </form>
            </div>
            <div id="signup" class="form">

                <form class="form-content" method="POST" action="connectivity-signup.php" >
                    <div class="header">
                        <h2>Sign Up </h2>
                        <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close">&times;</span>
                    </div>
                    <hr>
                    <div class="container4">
                        <label><b>Name:</b></label>
                        <input type="text" placeholder="Enter Name" name="name" required>

                        <label><b>Organization:</b></label>
                        <input type="text" placeholder="Organization Name" name="org" required>

                        <label><b>Email:</b></label>
                        <input type="email" placeholder="Enter Email" name="email" required>

                        <label><b>Password:</b></label>
                        <input type="password" placeholder="Enter Password" name="pass" required>

                        <label><b>Confirm Password:</b></label>
                        <input type="password" placeholder="Confirm Password" name="cpass" required>
                        
                        <button type="button" onclick="document.getElementById('login').style.display='none'" id="button1" >Close</button>

                        <button type="submit" id="button" name="submit">Sign Up</button>

                    </div>
                </form>
            </div>

 <div class="wrapper">     
<?php
$db = mysqli_connect('localhost', 'kshitijk_kshitijksk1', 'sandeshkha1', 'kshitijk_Portfolio_db');
$results = mysqli_query($db, "Select * From education");?>



<h2>Education</h2>

<?php while ($row = mysqli_fetch_array($results)){?>
<div id="wrapper">
<section class="bord">
  <p id="id">
  <?php echo $row['Sdate']?> - <?php echo $row['Edate']?><br><br>
  <strong><?php echo $row['Degree']?></strong>
  </p>
  
  <article class="univ">
    <h2 id="left"><?php echo $row['Major']?></h2>
    <p><?php echo $row['School']?> </p>
  </article>
</section>

</div>
<?php } ?>
</div>
</div>
</body>
</html>
