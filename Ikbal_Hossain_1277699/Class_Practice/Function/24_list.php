<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $colors = ["Green", "Orange", "Yellow"];

        print_r($colors);  // ekta element ar value gulake loop cara list akare dekhanor jonno list function use kora hoy
        echo "<hr>";

        list($value1, $value2, $value3) = $colors;
        echo "$value1 <br> $value2 <br> $value3";
        echo "<hr>";
    ?>


    <?php 
        function userProfile(){
            $user[] = "Masum";
            $user[] = "masum55549@gmail.com";
            $user[] = "01723835125";
            return $user;    
        }

        list($name, $email, $phone) = userProfile();
        echo "Student name is $name, His email address is $email and phone number is $phone";
    ?>
</body>
</html>