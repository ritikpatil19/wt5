<?php 
        
        session_start();
        $message="";
        if(count($_POST)>0) {
         $con = mysqli_connect('localhost','root','','wt') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM user WHERE user_name='" . $_POST["name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row))
         {
            $_SESSION["id"] = $row['id'];
            $_SESSION["name"] = $row['name'];
         } 
        else 
            {
                $message = "Invalid Username or Password!";
            }
        }
            if(isset($_SESSION["id"]))
             {
                header("Location:profile.php");
             }
         ?> 