<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST['submit'])){
            echo $_POST['name'];
            echo "<br>";
            echo $_POST['email'];
            echo "<br>";
            $languages = $_POST['languages'];
            $hobbies = $_POST['hobby'];
            // foreach($languages as $lang){
            //     echo $lang . ", ";
            // }
               $langs = implode(",", $languages);
               echo "All your favourite languages: " . $langs . "<br>";
               $hobs = implode(",", $hobbies);
               echo "All your hobbies: " . $hobs;


        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="name" placeholder="Enter name"><br>
    <input type="text" name="email" placeholder="Enter email"><br>
    <select name="languages[]" multiple>
        <option value="PHP">PHP</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Java">Java</option>
        <option value="Python">Python</option>


    </select><br>
    Hobbies: <br>
    Cricket <input type="checkbox" name="hobby[]" value="cricket">
    Football <input type="checkbox" name="hobby[]" value="football">
    Chess <input type="checkbox" name="hobby[]" value="chess">
    Tenis <input type="checkbox" name="hobby[]" value="tenis">
    <br>
    <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>