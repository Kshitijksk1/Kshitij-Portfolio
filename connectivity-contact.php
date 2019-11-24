<?php

require('config.php');

function Contact($con)
{
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
    
      
    
        $query = "INSERT INTO contact   (Name, Email, Subject, Message) VALUES('$Name','$Email', '$Subject', '$Message')";
    
    $data = mysqli_query($con,$query) or die(mysqli_error($con));
  
        $message = "Sucessfully Submitted Contact Details";
        echo "<script type='text/javascript'>alert('$message');</script>";
      readfile("contact.html");

    
   
}



if(isset($_POST['submit']))
{
    //echo "Signed Up";
    Contact($con);
    
}

?>