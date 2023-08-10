<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST['email'])){
           $email = $_POST['email'];
           $pass = $_POST['password'];
           echo validation($email, $pass);
           
        } 

        function validation($email, $pass){
            $error = [];
            $mgs = "";
            if($email == '' || $pass == ''){
                return "Must be entered email and password";
           } 
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  
                    $error[]= "INVALID email<br>";       
                }
                $passlength = strlen($pass);
                if(!$passlength<=8 || !$passlength>=4){    
                    $error[]="Use password 4 to 8 character<br>";   
                }

            if(!empty($error)){
                foreach($error as $err){
                    $mgs .= $err;
               }
               return $mgs;
                
            } else {
                return "All are validated";
            }
        }
    ?>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter email address"><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <input type="submit" name="submit" value="VALIDATE">
    </form>
    
</body>
</html>