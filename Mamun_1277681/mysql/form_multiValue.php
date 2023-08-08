<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" <?php $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="name" id="" placeholder="Enter Name"> <br>
    <input type="email" name="email" id="" placeholder="Enter Email Address"> <br> <br>
    <select name="languages[]" multiple="multiple"> <br>
        <option value="csharp">Select</option>
        <option value="csharp">C#</option>
        <option value="javascript">JavaScript</option>
        <option value="perl">Perl</option>
        <option value="php" selected>PHP</option>
</select> <br>
hobbies: <br>
Cricket<input type="checkbox" name="hobby[]" id="" value="Cricket">
Football<input type="checkbox" name="hobby[]" id="" value="Football">
Hockey<input type="checkbox" name="hobby[]" id="" value="Hockey">
Tennis<input type="checkbox" name="hobby[]" id="" value="Tennis">
<input type="submit" name="submit" id="" value="CHECK">
    </form>
</body>
</html>
<?php 
if(isset($_REQUEST["submit"])){
    $_REQUEST["submit"]; 
    echo $_REQUEST['name'];
    echo "<br>";
    echo $_REQUEST['email'];
    echo "<br>";
  $languages =( $_REQUEST['languages']);
//    foreach($languages as $lan){
//     echo $lan . ",";
//    }
$langs = implode(", ", $languages);
echo "Your Selected language are ". $langs;
echo "<br>";
$hobbies = $_REQUEST['hobby'];
$hobs = implode(',', $hobbies);
echo "All your hobies are ". $hobs;
   
}

?>