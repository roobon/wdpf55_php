<?php
    if(isset($_REQUEST["submit"])){
        echo "Name: ".  $_REQUEST["name"] ."<br>";
        echo "Email: ". $_REQUEST["email"]."<br>";
        $languages = $_REQUEST["languages"];
        // echo "Languages: ";
        // foreach ($languages as $language) {
        //     echo $language . ", ";
        // }
        $langs = implode(", ", $languages);
        echo "Languages: ". $langs;
        echo "<br>";

        $hobbies = $_REQUEST['hobbies'];
        $hobby = implode(", " , $hobbies);
        echo "Hobbies: " . $hobby;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <form action="" <?php $_SERVER["PHP_SELF"] ?> method="post">
        <input type="text" name="name" placeholder="Enter your name"> <br> <br>
        <input type="email" name="email" placeholder="Enter your email"> <br> <br>
        <select name="languages[]" multiple>
            <option value="PHP">PHP</option>
            <option value="Javascript">Javascript</option>
            <option value="React">React</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
        </select> <br><br>
        <input type="checkbox" name="hobbies[]" value="Cricket"> Cricket
        <input type="checkbox" name="hobbies[]" value="Football"> Football
        <input type="checkbox" name="hobbies[]" value="Gardenning"> Gardenning
        <input type="checkbox" name="hobbies[]" value="Programming"> Programming 
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>