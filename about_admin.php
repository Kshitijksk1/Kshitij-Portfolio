
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
  <body >
    <div class="container1">
    <nav class="navbar1">
          <div class="left"><a href="index_admin.html">Hello Admin</a></div>
          <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </a>
          <div class="right">
            <ul>
              <li><a href="about_admin.php">About</a></li>
              <li><a href="skills_admin.php">Skills</a></li>
              <li><a href="education_admin.php">Education</a></li>
              <li><a href="portfolio_admin.php">Portfolio</a></li>
              <li><a href="experience_admin.php">Experience</a></li>
              <li><a href="hireme_admin.php">Hire Me</a></li>
              <li><a href="blogs_admin.html">Blog</a></li>
              <li><a href="index1.html">Normal View</a></li>
            </ul>
          </div>
        </nav>
        
           

<div id="wrapper" style="margin-bottom:10%;">
        
        <form method="post" action="#" align="center">
            <fieldset>
                <legend>Add Info</legend>
                Age:<br>
                <input type="number" name="age" required>
                <br> Email:<br>
                <input type="email" name="em" required>
                <br> Phone:<br>
                <input type="textarea" name="ph" required>
                <br> Address:<br>
                <input type="textarea" name="add" required>
                <br> Languages:<br>
                <input type="textarea" name="lang" required>
    
                <input type="submit" value="Submit" name="about_add">
                <input type="reset">
            </fieldset>
        </form>
        
        <form method="post" action="#" align="center">
            <fieldset>
                <legend>Update Info</legend>
                <legend>Add Info</legend>
                Age:<br>
                <input type="number" name="age" required>
                <br> Email:<br>
                <input type="email" name="em" required>
                <br> Phone:<br>
                <input type="textarea" name="ph" required>
                <br> Address:<br>
                <input type="textarea" name="add" required>
                <br> Languages:<br>
                <input type="textarea" name="lang" required>
    
                <input type="submit" value="Submit" name="about_mod">
                <input type="reset">
            </fieldset>
        </form>
        <form method="post" action="#" align="center">
            <fieldset>
                <legend>Delete Info</legend>
                Email:<br>
                <input type="email" name="em" required>
                <input type="submit" value="Submit" name="about_del">
                <input type="reset">
            </fieldset>
        </form>
         
<?php
        session_start();
        $db = mysqli_connect('localhost', 'kshitijk_kshitijksk1', 'sandeshkha1', 'kshitijk_Portfolio_db');

        // initialize variables
        $age = "";
        $em = "";
        $ph = "";
        $add = "";
        $lang = "";
        

        if (isset($_POST['about_add'])) {
            $age = $_POST['age'];
            $em = $_POST['em'];
            $ph = $_POST['ph'];
            $add = $_POST['add'];
            $lang = $_POST['lang'];
            

            mysqli_query($db, "INSERT INTO about (Age, Email, Phone_no, address, Languages) VALUES ('$age', '$em', '$ph', '$add', '$lang')");
            $_SESSION['message'] = "Query saved";
            header('location: about_admin.php');
        }
        if (isset($_POST['about_mod'])) {
            $age = $_POST['age'];
            $em = $_POST['em'];
            $ph = $_POST['ph'];
            $add = $_POST['add'];
            $lang = $_POST['lang'];
            

            mysqli_query($db, "UPDATE about SET Age='$age', Phone_no='$ph', address='$add', Languages='$lang' WHERE Email='$em'");
            $_SESSION['message'] = "About updated!"; 
            header('location: about_admin.php');
        }
        if (isset($_POST['about_del'])) {
            $em = $_POST['em'];
            mysqli_query($db, "DELETE FROM about WHERE Email='$em'");
            $_SESSION['message'] = "About Deleted!"; 
            header('location: about_admin.php');
        }
        ?>
        <button onclick="ret()">Retrieve</button>
        <div id="ret" style="display:none;">
        <?php $results = mysqli_query($db, "SELECT * FROM about"); ?>

<table>
    <thead>
        <tr>
            <th>Address</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Languages</th>
            
        </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['Age']; ?></td>
            <td><?php echo $row['Phone_no']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Languages']; ?></td>
            
        </tr>
    <?php } ?>
</table>
        </div>
    </div>
</body>
<script>
    
    function ret() {
  var x = document.getElementById("ret");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</div>

</body>
</html>
