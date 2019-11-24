<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css"  />
    <link href="css/portfolio.css" rel="stylesheet" type="text/css"  />
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
                <legend>Add Portfolio</legend>
                Portfolio Image:<br>
                <input type="file" name="img" required>
                <br> Portfolio Domain:<br>
                <input type="textarea" name="pdomain" required>
               
    
                <input type="submit" value="Submit" name="port_add">
                <input type="reset">
            </fieldset>
        </form>
        
        <form method="post" action="#" align="center">
            <fieldset>
                <legend>Update Portfolio</legend>
                Portfolio Image:<br>
                <input type="file" name="img" required>
                <br> Portfolio Domain:<br>
                <input type="textarea" name="pdomain" required>
                
                
                <input type="submit" value="Submit" name="port_mod" id="insert">
                <input type="reset">
            </fieldset>
        </form>
        <form method="post" action="#" align="center">
            <fieldset>
                <legend>Delete Skill</legend>
                Portfolio Domain:<br>
                <input type="textarea" name="pdomain" required>
                <input type="submit" value="Submit" name="port_del">
                <input type="reset">
            </fieldset>
        </form>
         
<?php
        session_start();
        $db = mysqli_connect('localhost', 'kshitijk_kshitijksk1', 'sandeshkha1', 'kshitijk_Portfolio_db');

        // initialize variables
        $img = "";
        $pdomain = "";
        

        if (isset($_POST['port_add'])) {
            $img = $_POST['img'];
            $pdomain = $_POST['pdomain'];
            
            
            mysqli_query($db, "INSERT INTO portfolio (image, domain) VALUES ('$img', '$pdomain')");
            $_SESSION['message'] = "Query saved";
            header('location: portfolio_admin.php');
        }

        if (isset($_POST['port_mod'])) {
            $img = $_POST['img'];
            $pdomain = $_POST['pdomain'];
            

            mysqli_query($db, "UPDATE portfolio SET image='$img' WHERE domain='$pdomain'");
            $_SESSION['message'] = "Image updated!"; 
            header('location: portfolio_admin.php');
        }
        if (isset($_POST['port_del'])) {
            $pdomain = $_POST['pdomain'];
            mysqli_query($db, "DELETE FROM portfolio WHERE domain='$pdomain'");
            $_SESSION['message'] = "Image Deleted!"; 
            header('location: portfolio_admin.php');
        }
        ?>
        <button onclick="ret()">Retrieve</button>
        <div id="ret" style="display:none;">
        <?php $results = mysqli_query($db, "SELECT * FROM portfolio"); ?>

<table>
    <thead>
        <tr>
            <th>Portfolio Image</th>
            <th>Domain</th>
            
            
        </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" style="height: 200px">'?></td>
            <td><?php echo $row['domain']; ?></td>          
            
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
<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>
