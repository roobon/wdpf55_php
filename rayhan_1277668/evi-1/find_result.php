<?php 
// class
class Student {
    private $data ;
     function __construct($x)
    {
        $this->data = $x ;
    }

    function showResult($y) {
        $rawData = file($this->data) ;

        foreach( $rawData as $info ) {
            list($id , $name , $number, $result ) = explode("," , $info) ;
            if ($id == $y){
                echo " ID : $id,  Name: $name, Number: $number,  Result:$result " ;
            }
        }
    }
}
$obj = new Student('result.txt') ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Find Result </h3>

    <?php 
    // result
    if (isset($_POST['submit'])){  // check button is clicked or not
        $id =  $_POST['st-id'] ;    // ID picked from below form.
        // echo $id =  $_POST['st_id'] ;
        $obj->showResult($id) ;  // method called with ID
        
    }
    ?>

    <form action="" method="post">
        <select name="st-id">
            
            <option value="" disabled selected>select one </option>
            <option value="1">Rayhan</option>
            <option value="2">Khayrul</option>
            <option value="3">Alam</option>
            <option value="4">Abul</option>
            <option value="5">Kalam</option>
            <option value="6">Azad</option>
        </select>
        <input type="submit" name="submit" value="FIND">

    </form>
</body>
</html>


<!-- https://www.w3schools.com/php/exercise.asp?filename=exercise_switch1 -->