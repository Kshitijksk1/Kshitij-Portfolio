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
                <legend>Add Experience</legend>
                Company Name:<br>
                <input type="textarea" name="cname" required>
                <br> Start date:<br>
                <input type="date" name="sdate" required>
                <br> End date:<br>
                <input type="date" name="edate" required>
                <br> Role:<br>
                <input type="textarea" name="role" required>
                <br> Job Type:<br>
                <input type="textarea" name="jtype" required>
                <br><br>
                <input type="submit" value="Submit" name="exp_add">
                <input type="reset">
            </fieldset>
        </form>
        
        <form method="post" action="#" align="center">
            <fieldset>
                <legend>Update Experience</legend>
                Company Name:<br>
                <input type="textarea" name="cname" required>
                <br> Start date:<br>
                <input type="date" name="sdate" required>
                <br> End date:<br>
                <input type="date" name="edate" required>
                <br> Role:<br>
                <input type="textarea" name="role" required>
                <br> Job Type:<br>
                <input type="textarea" name="jtype" required>
                <br><br>
                <input type="submit" value="Submit" name="exp_mod">
                <input type="reset">
            </fieldset>
        </form>
        <form method="post" action="#" align="center">
            <fieldset>
                <legend>Delete Experience</legend>
                Company Name:<br>
                <input type="textarea" name="cname" required>
                <input type="submit" value="Submit" name="exp_del">
                <input type="reset">
            </fieldset>
        </form>
         
<?php
        session_start();
        $db = mysqli_connect('localhost', 'kshitijk_kshitijksk1', 'sandeshkha1', 'kshitijk_Portfolio_db');

        // initialize variables
        $cname = "";
        $sdate = "";
        $edate = "";
        $role = "";
        $jtype = "";
        

        if (isset($_POST['exp_add'])) {
            $cname = $_POST['cname'];
            $sdate = $_POST['sdate'];
            $edate = $_POST['edate'];
            $role = $_POST['role'];
            $jtype = $_POST['jtype'];
            

            mysqli_query($db, "INSERT INTO experience (Company, start_date, end_date, Role, job_type) VALUES ('$cname', '$sdate', '$edate', '$role', '$jtype')");
            $message = "Query saved";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('location: experience_admin.php');
        }
        if (isset($_POST['exp_mod'])) {
            $cname = $_POST['cname'];
            $sdate = $_POST['sdate'];
            $edate = $_POST['edate'];
            $role = $_POST['role'];
            $jtype = $_POST['jtype'];

            mysqli_query($db, "UPDATE experience SET start_date='$sdate', end_date='$edate', Role='$role', job_type='$jtype' WHERE Company='$cname'");
            $message = "Experience updated!";
            echo "<script type='text/javascript'>alert('$message');</script>"; 
            header('location: experience_admin.php');
        }
        if (isset($_POST['exp_del'])) {
            $cname = $_POST['cname'];
            mysqli_query($db, "DELETE FROM experience WHERE Company='$cname'");
            $message = "Experience Deleted!";
            echo "<script type='text/javascript'>alert('$message');</script>"; 
            header('location: experience_admin.php');
        }
        ?>
        <button onclick="ret()">Retrieve</button>
        <div id="ret" style="display:none;">
        <?php $results = mysqli_query($db, "SELECT * FROM experience"); ?>

<table>
    <thead>
        <tr>
            <th>Company Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Role</th>
            <th>Job Type</th>
            
        </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['Company']; ?></td>
            <td><?php echo $row['start_date']; ?></td>
            <td><?php echo $row['end_date']; ?></td>
            <td><?php echo $row['Role']; ?></td>
            <td><?php echo $row['job_type']; ?></td>
            
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
