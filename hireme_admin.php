<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css"  />
    <link href="css/hireme.css" rel="stylesheet" type="text/css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="JS/test.js" defer></script>
</head>
<body>
  <div class="container1">
    <nav class="navbar1">
          <div class="left"><a href="index_admin.html">Kshitij S Khaladkar</a></div>
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
                <legend>Add Costing</legend>
                Service Domain:<br>
                <input type="textarea" name="sdomain" required>
                <br> Service 1<br>
                <input type="textarea" name="s1" required>
                <br> Service 2<br>
                <input type="textarea" name="s2" required>
                <br> Service 3<br>
                <input type="textarea" name="s3" required>
                <br> Service 4<br>
                <input type="textarea" name="s4" >
                <br> Charges<br>
                <input type="number" name="charges" >
                <br><br>
                <input type="submit" value="Submit" name="hire_add">
                <input type="reset">
            </fieldset>
        </form>
        
        <form method="post" action="#" align="center">
            <fieldset>
                <legend>Update Costing</legend>
                Service Domain:<br>
                <input type="textarea" name="sdomain" required>
                <br> Service 1<br>
                <input type="textarea" name="s1" required>
                <br> Service 2<br>
                <input type="textarea" name="s2" required>
                <br> Service 3<br>
                <input type="textarea" name="s3" >
                <br> Service 4<br>
                <input type="textarea" name="s4" >
                <br> Charges<br>
                <input type="number" name="charges" required>
                <br><br>
                <input type="submit" value="Submit" name="hire_mod">
                <input type="reset">
            </fieldset>
        </form>
        <form method="post" action="#" align="center">
            <fieldset>
                <legend>Delete Costing</legend>
                Service Domain:<br>
                <input type="textarea" name="sdomain" required>
                <input type="submit" value="Submit" name="hire_del">
                <input type="reset">
            </fieldset>
        </form>
         
<?php
        session_start();
        $db = mysqli_connect('localhost', 'kshitijk_kshitijksk1', 'sandeshkha1', 'kshitijk_Portfolio_db');

        // initialize variables
        $sdomain = "";
        $s1 = "";
        $s2 = "";
        $s3 = "";
        $s4 = "";
        $s4 = "";
        $charges = "";
        

        if (isset($_POST['hire_add'])) {
            $sdomain = $_POST['sdomain'];
            $s1 = $_POST['s1'];
            $s2 = $_POST['s2'];
            $s3 = $_POST['s3'];
            $s4 = $_POST['s4'];
            $charges = $_POST['charges'];

            mysqli_query($db, "INSERT INTO hire_me (service_domain, service_1, service_2, service_3, service_4, cost) VALUES ('$sdomain', '$s1', '$s2', '$s3', '$s4', '$charges')");
            $message = "Query saved";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('location: hireme_admin.php');
        }
        if (isset($_POST['hire_mod'])) {
            $sdomain = $_POST['sdomain'];
            $s1 = $_POST['s1'];
            $s2 = $_POST['s2'];
            $s3 = $_POST['s3'];
            $s4 = $_POST['s4'];
            $charges = $_POST['charges'];

            mysqli_query($db, "UPDATE hire_me SET service_1='$s1', service_2='$s2', service_3='$s3', service_4='$s4', cost='$charges' WHERE service_domain='$sdomain'");
            $message = "Costing updated!";
            echo "<script type='text/javascript'>alert('$message');</script>"; 
            header('location: hireme_admin.php');
        }
        if (isset($_POST['hire_del'])) {
            $sdomain = $_POST['sdomain'];
            mysqli_query($db, "DELETE FROM hire_me WHERE service_domain='$sdomain'");
            $message = "Costing Deleted!";
            echo "<script type='text/javascript'>alert('$message');</script>"; 
            header('location: hireme_admin.php');
        }
        ?>
        <button onclick="ret()">Retrieve</button>
        <div id="ret" style="display:none;">
        <?php $results = mysqli_query($db, "SELECT * FROM hire_me"); ?>

<table>
    <thead>
        <tr>
            <th>Service Domain</th>
            <th>Service 1</th>
            <th>Service 2</th>
            <th>Service 3</th>
            <th>Service 4</th>
            <th>Charges</th>
            
        </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['service_domain']; ?></td>
            <td><?php echo $row['service_1']; ?></td>
            <td><?php echo $row['service_2']; ?></td>
            <td><?php echo $row['service_3']; ?></td>
            <td><?php echo $row['service_4']; ?></td>
            <td><?php echo $row['cost']; ?></td>
            
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


</div>

</body>
</html>
