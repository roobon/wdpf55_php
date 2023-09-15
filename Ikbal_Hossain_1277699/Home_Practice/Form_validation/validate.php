<?php 
    $myemail = "ikbalhossain@gmail.com";
    $mypass = "ikbal123";

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        if($email == $myemail and $pass == $mypass){
            
           // echo "Successfully Login"
            session_start();
            $_SESSION['name'] = "Ikbal Hossain";
            header("Location: dashboard.php");

        } else {
            echo  "<h3> Email or Password is invalid. <br> <a href='login.php'> click here </a> &nbsp; to login again </h3>";
        }
        
    } else {
        echo header("Location: login.php"); // if I write validate.php in url, it will automatically return to login.php
    }
?>