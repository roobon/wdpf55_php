<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="grade">
        <input type="submit" name="submit" value="Check"> 
    </form>

    <?php 
      if(isset($_POST["submit"])){
        $grade = $_POST["grade"];
      }
      if($grade == "A"){
        echo "Excellent";
      } else if($grade == "B") {
        echo "Good";
      } else if($grade == "C") {
        echo "Fair";
      } else if($grade == "D") {
        echo "Poor";
      } else if($grade == "E") {
        echo "Fail";
      }
    
    
    
    
    
    ?>
</body>
</html>