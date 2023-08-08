<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
     <input type="text" name="name" placeholder="Enter name"><br><br>
     <input type="text" name="email" placeholder="Enter email"><br><br>
      <select name="languages[]" multiple="multiple"><br><br>
         <option value="PHP">PHP</option>
         <option value="Javascript">Javascript</option>
         <option value="Java">Java</option>
        </select><br><br>
        Hobbies:
        Cricket : <input type="checkbox" name="hobby[]" value="cricket">
        Football : <input type="checkbox" name="hobby[]" value="football">
        Chess : <input type="checkbox" name="hobby[]" value="chess">
        Tennis : <input type="checkbox" name="hobby[]" value="tennis"><br><br>
        <input type="submit" name="submit" value="SUBMIT"><br>
  </form>

    <?php 
      if(isset($_POST["submit"])){
        echo $_POST['name'];
        echo "<br>";
        echo $_POST['email'];
        echo "<br>";
        $languages = $_POST['languages'];
        $hobbies = $_POST['hobby'];
        // foreach($languages as $lang){
        //     echo $lang . ",";
        // }
         $langs = implode(",", $languages);
         echo "All your favourite languages: " . $langs . "<br>";
         $hobs = implode(",", $languages);
         echo "All your hobbies: " . $hobs;
        

    }
    
    ?>
</body>
</html>