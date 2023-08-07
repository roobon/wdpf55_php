<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

use JetBrains\PhpStorm\Language;

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        echo "Name: $name <br>";
        $email = $_POST['email'];
        echo "Email: $email <br>";
        $lang = $_POST['languages'];
        // foreach($lang as $language){
        //     echo "Language: " .$language, ",";
        // }
        $langs = implode(", ", $lang);
        echo "Language: " . $langs . "<br>";

        $hobbies = $_POST['hobbies'];
        $hobb = implode(", ", $hobbies);
        echo "Hobbies: " . $hobb;
        
    }

?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    <input type="text" name="name" placeholder="Enter your name"><br>
    <input type="text" name="email" placeholder="Enter your email"><br>

    <select name="languages[]" multiple>
        <option value="PHP">PHP</option>
        <option value="Java">Java</option>
        <option value="C#">C#</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Python">Python</option>
    </select><br>
    <label for="">Hobbies: </label>
    <label for="">Cricket</label>
    <input type="checkbox" name="hobbies[]" value="cricket">

    <label for="">Football</label>
    <input type="checkbox" name="hobbies[]" value="football">

    <label for="">Tenis</label>
    <input type="checkbox" name="hobbies[]" value="tenis"><br>

    <input type="submit" name="submit" value="SUBMIT">
    </form>

</body>
</html>