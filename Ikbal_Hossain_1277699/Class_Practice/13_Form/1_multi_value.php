<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        if(isset($_POST["submit"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $language = $_POST["language"];
            $hobby = $_POST["hobby"];

            echo $name . "<br>" . $email . "<br>" . $language . "<br>" . $hobby;

        }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">

        <input type="text" name="name" placeholder="Enter name"> <br>
        <input type="text" name="email" placeholder="Enter email"> <br>

        <select name="language" id="">
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Java">Java</option>
            <option value="Python">Python</option>
        </select> <br>

        Hobbies: <br>
        Cricket<input type="checkbox" name="hobby[]" value="cricket">
        Football<input type="checkbox" name="hobby[]" value="football">
        Tennis<input type="checkbox" name="hobby[]" value="tennis"> <br>

        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>