<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
if ( isset( $_POST['name'] ) ) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $language = $_POST['languages'] ;
    $lang = implode(", " , $language) ;
    $hobbies = $_POST['hobbies'] ;
    $hobby = implode(", " , $hobbies) ;
    
   

    echo  " Name: $name   <br>  
            Email: $email <br>
            Language: $lang  <br>
            Hobbies: $hobby
    " ;
}

?>    

<form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="post">

<input type="text" name="name" placeholder="Enter name"> <br>
<input type="text" name="email" placeholder="Enter Email"> <br>
<select name="languages[]" multiple>
    <option value="" disabled >select one</option>
    <option value="PHP">PHP</option>
    <option value="Javascript"> Javascript </option>
    <option value="python"> Python </option>
    <option value="ruby"> ruby </option>
</select> <br>

Hobbies: <br>
<input type="checkbox" name="hobbies[]"> Cricket <br>  
<input type="checkbox" name="hobbies[]"> Football <br>  
<input type="checkbox" name="hobbies[]"> Gaming <br>  
<input type="checkbox" name="hobbies[]"> Tiktok <br>  <br>

<input type="submit" value="Submit" >
</form>
</body>
</html>