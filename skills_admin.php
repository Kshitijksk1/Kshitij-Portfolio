
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
                <legend>Add Skill</legend>
                Skill Name:<br>
                <input type="text" name="skill" required>
                <br> Skill Percentage:<br>
                <input type="number" name="skper" min="1" max="100" required>
               
    
                <input type="submit" value="Submit" name="skill_add">
                <input type="reset">
            </fieldset>
        </form>
        
        <form method="post" action="#" align="center">
            <fieldset>
                <legend>Update Skill</legend>
                Skill Name:<br>
                <input type="text" name="skill" required>
                <br> Skill Percentage:<br>
                <input type="number" name="skper" min="1" max="100" required>
                
                
                <input type="submit" value="Submit" name="skill_mod">
                <input type="reset">
            </fieldset>
        </form>
        <form method="post" action="#" align="center">
            <fieldset>
                <legend>Delete Skill</legend>
                Skill Name:<br>
                <input type="text" name="skill" required>
                <input type="submit" value="Submit" name="skill_del">
                <input type="reset">
            </fieldset>
        </form>
         
<?php
        session_start();
        $db = mysqli_connect('localhost', 'kshitijk_kshitijksk1', 'sandeshkha1', 'kshitijk_Portfolio_db');

        // initialize variables
        $skill = "";
        $skper = "";
        

        if (isset($_POST['skill_add'])) {
            $skill = $_POST['skill'];
            $skper = $_POST['skper'];
            
            
            mysqli_query($db, "INSERT INTO skills (skill_name, skill_percent) VALUES ('$skill', '$skper')");
            $_SESSION['message'] = "Query saved";
            header('location: skills_admin.php');
        }

        if (isset($_POST['skill_mod'])) {
            $skill = $_POST['skill'];
            $skper = $_POST['skper'];
            

            mysqli_query($db, "UPDATE skills SET skill_name='$skill', skill_percent='$skper' WHERE skill_name='$skill'");
            $_SESSION['message'] = "Skill updated!"; 
            header('location: skills_admin.php');
        }
        if (isset($_POST['skill_del'])) {
            $skill = $_POST['skill'];
            mysqli_query($db, "DELETE FROM skills WHERE skill_name='$skill'");
            $_SESSION['message'] = "Skill Deleted!"; 
            header('location: skills_admin.php');
        }
        ?>
        <button onclick="ret()">Retrieve</button>
        <div id="ret" style="display:none;">
        <?php $results = mysqli_query($db, "SELECT * FROM skills"); ?>

<table>
    <thead>
        <tr>
            <th>Skill Name</th>
            <th>Skill Percent</th>
            
            
        </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['skill_name']; ?></td>
            <td><?php echo $row['skill_percent']; ?></td>          
            
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
