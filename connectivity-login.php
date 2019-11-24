<?php

require('config.php');

function Login($con)
{
 if(!empty($_POST['email']))
    {

        $query = mysqli_query($con,"SELECT Password FROM users WHERE Email = '$_POST[email]'") or die(mysqli_error($con));
        $query1 = mysqli_query($con,"SELECT user_type FROM users WHERE Email = '$_POST[email]'") or die(mysqli_error($con));
        $getpass = mysqli_fetch_array($query);
        $getpass1 = mysqli_fetch_array($query1);
        $dbpass = $getpass[0];
        $dbpass1 = $getpass1[0];
        $temp = $_POST['pass'];
        //$temp1 = $_POST['user_type']
        
        if($temp == $dbpass && $dbpass1 == 'admin')
        {
            header('Location: index_admin.html');
        }
        else if($temp == $dbpass && $dbpass1 == 'user')
        {
            header('Location: index1.html');
        } 
        else
        {
            $message = "Username and/or Password incorrect.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            readfile("index1.html");
        }

    }    
}

if(isset($_POST['submit']))
{

    Login($con);
    
}

?>