<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" <?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="name" placeholder="Enter Name" ><br>
    <input type="text" name="email" placeholder="Enter Email" ><br>
    <select  name ="language[]" multiple>

        <option value="PHP">PHP</option>
        <option value="Javascript">Javascript</option>
        <option value="Python">Python</option>
    </select>
    <input type="submit" name="submit" value="SUBMIT">
</form>

    <?php 
    if(isset($_POST['submit'])){
        echo $_POST['name'];
        echo "<br>";
        echo $_POST['email'];
        echo "<br>";
        $language = $_POST['language'];
        foreach($language as $lang){
            echo $lang .",";
        }

        // $langs = implode("," , $language);
        // echo $langs;
    }
    ?>



</body>
</html>