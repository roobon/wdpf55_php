<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <input type="text" name="name" placeholder="Enter Name"><br><br>
        <input type="email" name="email" placeholder="Enter Email"><br><br>
        <select name="languages[]" multiple="multiple"><br><br>
            <option value="PHP">PHP</option>
            <option value="javascript">JavaScript</option>
            <option value="C+">C+</option>
        </select><br><br>
        <input type="checkbox" name="hobby[]" value="Cricket">Cricket
        <input type="checkbox" name="hobby[]" value="Football">Football
        <input type="checkbox" name="hobby[]" value="Tenis">Tenis<br><br>
        <input type="submit" name="submit" value="Submit"> 
    </form>

    <?php 
        if(isset($_POST["submit"])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $language = $_POST['languages'];
            $hobbies = $_POST['hobby'];
            
            echo "Name : $name";
            echo "<br>";
            echo "Email : $email";
            echo "<br>";
            $lang = implode(", ",$language);
            echo "Language : $lang";
            echo "<br>";
            $hobby = implode(", ",$hobbies);
            echo "Hobby : $hobby";

        }
    ?>

</body>
</html>