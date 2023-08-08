<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="name" placeholder="Enter Name"><br><br>
        <input type="text"name="email" placeholder="Enter email"><br><br>
        Language:<br>
        <select name="languages[]" multiple>
            <option value="PHP">PHP</option>
            <option value="JS">JS</option>
            <option value="JAVA">JAVA</option>
        </select> <br>
        HOBBY:
        <input type="checkbox" name="hobby[]" value="Playing"> Playing
        <input type="checkbox" name="hobby[]" value="Reading"> Reading
        <input type="checkbox" name="hobby[]" value="Eating"> Eating
        <input type="checkbox" name="hobby[]" value="Traveling"> Traveling

        <input type="submit" name="submit" value="GO">
    </form>

    <?php 
    
    if(isset($_POST['submit'])){
        echo $name = $_POST['name'];
        echo "<br>";
        echo $email = $_POST['email'];
        echo "<br>";
        $languages = $_POST['languages'];
        $hobby = $_POST['hobby'];
        // foreach($languages as $lang){
        //     echo $lang . ", ";
        $lang = implode(", ", $languages);
        echo $lang;
        $hoby = implode(", ", $hobby);
        echo $hoby;
        

        
    }
    
    ?>
</body>
</html>