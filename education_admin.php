
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
                <legend>Add Education</legend>
                Education Degree:<br>
                <input type="textarea" name="eduname" required>
                <br> Start date:<br>
                <input type="date" name="sdate" required>
                <br> End date:<br>
                <input type="date" name="edate" required>
                <br> Education Instituite:<br>
                <input type="textarea" name="ins" required>
                <br> Education Major:<br>
                <input type="textarea" name="edudesc" required>
                <br> Education Grade:<br>
                <input type="textarea" name="grade" required>
                <br><br>
                <input type="submit" value="Submit" name="edu_add">
                <input type="reset">
            </fieldset>
        </form>
        
        <form method="post" action="#" align="center">
            <fieldset>
                <legend>Update Education</legend>
                Education Degree:<br>
                <input type="textarea" name="eduname" required>
                <br> Start date:<br>
                <input type="date" name="sdate" required>
                <br> End date:<br>
                <input type="date" name="edate" required>
                <br> Education Instituite:<br>
                <input type="textarea" name="ins" required>
                <br> Education Major:<br>
                <input type="textarea" name="edudesc" required>
                <br> Education Grade:<br>
                <input type="textarea" name="grade" required>
                <br><br>
                <input type="submit" value="Submit" name="edu_mod">
                <input type="reset">
            </fieldset>
        </form>
        <form method="post" action="#" align="center">
            <fieldset>
                <legend>Delete Education</legend>
                Education Degree:<br>
                <input type="textarea" name="eduname" required>
                <input type="submit" value="Submit" name="edu_del">
                <input type="reset">
            </fieldset>
        </form>
         
<?php
        session_start();
        $db = mysqli_connect('localhost', 'kshitijk_kshitijksk1', 'sandeshkha1', 'kshitijk_Portfolio_db');

        // initialize variables
        $eduname = "";
        $sdate = "";
        $edate = "";
        $ins = "";
        $edudesc = "";
        $grade = "";

        if (isset($_POST['edu_add'])) {
            $eduname = $_POST['eduname'];
            $sdate = $_POST['sdate'];
            $edate = $_POST['edate'];
            $ins = $_POST['ins'];
            $edudesc = $_POST['edudesc'];
            $grade = $_POST['grade'];

            mysqli_query($db, "INSERT INTO education (School, Sdate, Edate, Major, GPA, Degree) VALUES ('$ins', '$sdate', '$edate', '$edudesc', '$grade', '$eduname')");
            $message = "Query saved";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('location: education_admin.php');
        }
        if (isset($_POST['edu_mod'])) {
            $eduname = $_POST['eduname'];
            $sdate = $_POST['sdate'];
            $edate = $_POST['edate'];
            $ins = $_POST['ins'];
            $edudesc = $_POST['edudesc'];
            $grade = $_POST['grade'];

            mysqli_query($db, "UPDATE education SET Sdate='$sdate', Edate='$edate', School='$ins', Degree='$eduname', GPA='$grade' WHERE Major='$edudesc'");
            $message = "Education updated!"; 
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('location: education_admin.php');
        }
        if (isset($_POST['edu_del'])) {
            $eduname = $_POST['eduname'];
            mysqli_query($db, "DELETE FROM education WHERE Degree='$eduname'");
            $message = "Education Deleted!";
            echo "<script type='text/javascript'>alert('$message');</script>"; 
            header('location: education_admin.php');
        }
        ?>
        <button onclick="ret()">Retrieve</button>
        <div id="ret" style="display:none;">
        <?php $results = mysqli_query($db, "SELECT * FROM education"); ?>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Instituite</th>
            <th>Description</th>
            <th>Grade</th>
        </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['Degree']; ?></td>
            <td><?php echo $row['Sdate']; ?></td>
            <td><?php echo $row['Edate']; ?></td>
            <td><?php echo $row['School']; ?></td>
            <td><?php echo $row['Major']; ?></td>
            <td><?php echo $row['GPA']; ?></td>
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
