<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
//     if(isset($_POST["submit"])){
//       $email=  $_REQUEST["email"];
//     //   echo $email;
//    if (filter_var($email,FILTER_VALIDATE_EMAIL)){
//     echo "Email Address is valid";
//     }
//     else{
//         echo "Email address is invalid";
//     }
//     if
if(isset($_REQUEST["submit"])){
 $email=   $_REQUEST["email"];
 if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "valid email";
 }

}
    ?>
    <form action="" method="post">
        <input type="text" name="email" id="" placeholder="Enter Email Address">
        <input type="submit" name="submit" id="" value="VALIDATE">
    </form>
</body>
</html>