<?php

    class Student{
        private $data;

        function __construct($x)
        {
            $this->data = $x;        
        }

        function showResult($st_id){
            $rawData = file($this->data);
            foreach ($rawData as $value) {
                list($id, $name, $round, $status) = explode(",", $value);

                if ($id==$st_id) {
                    echo "ID: $id, Name: $name, Round: $round, Result: $status."; 
                }
            }
        }
    }

    $st = new Student("result.txt");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Result</title>
</head>
<body>
    <h2>Find Result</h2>

    <?php   
    
    // result 
    if(isset($_REQUEST["submit"])){
        $id = $_REQUEST['st_ID'];

        $st->showResult($id);
    }
    // echo PHP_EOL; 
    ?>

    <form action="" method="post">
        <select name="st_ID">
            <option value="" selected disabled>Select one</option>
            <option value="1">Sadid</option>
            <option value="2">Mamun</option>
            <option value="3">Molla</option>
            <option value="4">Rayhan</option>
            <option value="5">Masum</option>
        </select>
        <input type="submit" name="submit" value="Find">
    </form>
</body>
</html>