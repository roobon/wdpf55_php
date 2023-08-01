<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Validation with PHP</title>
</head>
 
<body>
<?php
    if(isset($_POST['email'])){
        
        $email = $_POST['email'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "'$email' is a valid";
        } else {
             
            echo "'$email' is a invalid";    
        }            
    }
?>   
<form method="post" action="">
    <input type="text" name="email" placeholder="Put email address"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
