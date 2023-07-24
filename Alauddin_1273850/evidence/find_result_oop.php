<?php 
//class
class Student {
    private $data;
    public function __construct($x){
        $this->data = $x;
    }
    function showResult($y){
        $rawData = file($this->data);
        foreach($rawData as $line){
            list($id, $name, $batch, $result) = explode(",", $line);
            if($id == $y){
                echo "ID: $id, Name: $name, Result: $result <br><br>";
            }
        }
    }
}

$st = new Student('result.txt');

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
        if(isset($_POST['submit'])){  // chech button is clicked or not
            //echo $_POST['st_id'];  
            $id = $_POST['st_id'];  // id click form
            $st->showResult($id);  // method called with ID
        }
        //echo $_POST['st_id'];
       
    ?>
    <form method="post" action="">
        <select name="st_id">
            <option value="" disabled selected>Select One</option>
            <option value="1">Masum</option>
            <option value="2">Mollah</option>
            <option value="3">Ikbal</option>
            <option value="4">Rayhan</option>
            <option value="5">Shuvo</option>
        </select>
        <input type="submit" name="submit" value="FIND">
    </form>

    
</body>
</html>