<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        if (isset($_POST['submit'])) {
            echo $name = $_POST['name'];
            echo "<br>";
            echo $email = $_POST['email'];
            echo "<br>";
            $language = $_POST['languages'];
            echo "<br>";
            $hobbies = $_POST['hobbies'];


            //    foreach($language as $lang){
            //     echo $lang.",";


            //    }
            $langs = implode(", ", $language);
            echo "All your favorite languages: " . $langs . "<br>";
            $hobby = implode(", ", $hobbies);
            echo "All your favorite  hobby game: " . $hobby . "<br>";
        }

    ?>


    <form action="<?php echo  $_SERVER['PHP_SELF'] ?>" method="post">
        Name: <input type="text" name="name" placeholder="Enter your Name"><br>
       Email: <input type="text" name="email" placeholder="Enter your Email"><br> <br>
        Course: <br>
        <select name="languages[]" multiple>
            <option value="PHP">PHP</option>
            <option value="JAVASCRIPT">JAVASCRIPT</option>
            <option value="REACT">REACT</option>
            <option value="ANGULER">ANGULER</option>
        </select>
        <br> <br>

        Hobbies: <br>
        Cricket<input type="checkbox" value="Cricket" name="hobbies[]">
        Football<input type="checkbox" value="Football" name="hobbies[]">
        Tennis<input type="checkbox" value="Tennis" name="hobbies[]">
        Traveling<input type="checkbox" value="Games" name="hobbies[]">
        <br>
        <input type="submit" name="submit" value="CHECK">


    </form>
</body>

</html>