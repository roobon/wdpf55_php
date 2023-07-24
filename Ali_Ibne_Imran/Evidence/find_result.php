<?php 
    // require_once("result.txt");
    class Student{
        private $data; // property
        function __construct($x){ // constructor
            $this->data = $x;
        }
        function showResult($y){ // method
            $rawdata = file($this->data);
            foreach ($rawdata as $line) {
                list($id, $name, $batch, $result) = explode(",", $line);
                if($id == $y){
                    echo "ID : $id <br> Name :  $name <br> Batch : $batch <br> Result : $result <br><br>";
                }
            }
            
        }
    }
    $st = new Student("result.txt"); // new object with a parameter
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
        // result
        if(isset($_POST["submit"])){   // check button is clicked
           $id = $_POST["st_id"];  // id picked from below form
           $st->showResult($id);  // method calling with id
        }
        
    ?>
    <form action="" method="post">
        <select name="st_id">
            <option value="" disabled selected>Select One</option>
            <option value="1">Masum</option>
            <option value="2">Ikbal</option>
            <option value="3">Imran</option>
            <option value="4">Mahadiul</option>
            <option value="5">Sadid</option>
            <option value="6">Shakib </option>
        </select>
        <input type="submit" name="submit" value="Find">
    </form>
</body>
</html>