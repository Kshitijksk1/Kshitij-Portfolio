<?php

require('config.php');

function NewUser($con)
{
    $fullName = $_POST['name'];
    $organization = $_POST['org'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
    $errors = array();
    

    if (empty($fullName)) { 
            array_push($errors, "Name is required");
            echo "Name is required"; 
        }
    if (empty($email)) { 
            array_push($errors, "Email is required");
            echo "Email Is Required"; 
        }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            array_push($errors, "Enter a valid Email-id ");
            echo "Enter Valid Email";
        }
    if (empty($password)) { 
            array_push($errors, "Password is required");
            echo "Password Is Required"; 
        } 
    

    if (count($errors) == 0 AND $password==$cpassword) {
            $password1 = md5($password);

            $query = "INSERT INTO users (Name,Organization,Email,Password) VALUES('$fullName','$organization','$email','$password1')";
    
            $data = mysqli_query($con,$query) or die(mysqli_error($con));
  
            $message = "Sucessfully Registered";
            echo "<script type='text/javascript'>alert('$message');</script>";
            readfile("index1.html");

        }
    else
        {
            $message = "Password Did Not Match Confirm Password";
            echo "<script type='text/javascript'>alert('$message');</script>";
            readfile("index1.html");
        }
    
}

function Signup($con)
{
    if(!empty($_POST['email']))
    {
        $query = mysqli_query($con,"SELECT * FROM users WHERE Email = '$_POST[email]'") or die(mysqli_error());
        
        if(!$row=mysqli_fetch_array($query) or die(mysqli_error($con)))
        {
            NewUser($con);
        }
        else{
            $message = "You Have Already Registered. Please Login";
        echo "<script type='text/javascript'>alert('$message');</script>";
        readfile("index1.html");
        }

    }
    
}

if(isset($_POST['submit']))
{
    //echo "Signed Up";
    Signup($con);
    
}

?>