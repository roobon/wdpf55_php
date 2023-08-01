<?php

class Student
{
    public $id;
    public $name;
    public $batch;
    public $data;

    function __construct($x)
    {
        $this->data = file($x);
    }

    function  result($id)
    {
        foreach ($this->data as $line) {
            list($stId , $name , $batch)  = explode(",", $line);

            if (trim($stId) == $id) {
                echo $line . "<br>";
            }
        }
    }
}

// $st = new Student('result.txt');
// $st->result(4);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Show result</h1>


    <?php
    if (isset($_POST['submit'])) {
        // print_r($_POST);
        $myid =  $_POST['id'];
         $myid=  trim($myid) ;
        $st = new Student('result.txt');
        $st->result($myid);
        
    }

    ?>

    <form action="" method="post">
        <input type="text" name="id" placeholder="give student ID"> <br>
        <input type="submit" name="submit" value="result">

    </form>
</body>

</html>