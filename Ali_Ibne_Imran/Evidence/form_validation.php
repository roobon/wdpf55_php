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
        $pass = $_POST['password'];

        if($email == "" || $pass == ""){
            echo "Must be entered email & password";
        }else{
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "'$email' is a valid <br>";
            } else {
                 
                echo "'$email' is a invalid <br>";    
            }  
            
            if(strlen($pass)<=8 && strlen($pass)>=4){
                echo "password is validate";
            }else{
                echo "password must be 4 to 8 character";
            }
        }
       
    }
?>   
<form method="post" action="">
    <input type="text" name="email" placeholder="enter email address"><br><br>
    <input type="password" name="password" placeholder="enter password"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
