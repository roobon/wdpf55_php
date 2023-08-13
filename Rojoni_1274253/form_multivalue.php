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
    //    foreach($languages as $lang){
    //     echo $lang . ",";
    //    }
    $langs = implode("," , $languages);
    echo $langs;
       
       
    }
    
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="name" placeholder="Enter name"><br>
    <input type="text" name="email" placeholder="Enter email"><br>
    <select name="languages[]" multiple>
        <option value="PHP">PHP</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Java">Java</option>
        <option value="Python">Python</option>
     </select><br>
    <input type="submit" name="submit" value="SUBMIT">


    </form>
    
</body>
</html>