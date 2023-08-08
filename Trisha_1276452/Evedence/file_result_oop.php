<?php
// Class

class Student{
    private $data; //proparty
    function __construct($x){ //Constructor
        $this->data = $x;

    }
    function showResult($y){ //Method
        $rawData = file($this->data);
        foreach($rawData as $line){
            list($id,$name,$batch,$result)  = explode("," ,$line);
            if($id == $y){
                echo "ID: $id, Name: $name, Result: $result";
            }
        }
    }
} // End of Class

$st = new Student('result.txt'); //Creat Object 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Find Result</h3>


    <?php
    //Result
    if(isset($_POST['submit'])){ // Check button is clicked
        $id = $_POST['st_id']; // ID picked from below form
        $st->showResult($id); // method called with ID
    // echo $_POST['st_id'];
    }
    ?>


    <form action="" method ="post">
        <select name="st_id">
            <option value="" disabled selected>Select One</option>
            <option value="1">Masum</option>
            <option value="2">Molla</option>
            <option value="3">Ikbal</option>
            <option value="4">Raihan</option>
            <option value="5">Shuvo</option>

        </select>
    <input type="submit" name="submit" value="FIND">
    </form>
</body>
</html>