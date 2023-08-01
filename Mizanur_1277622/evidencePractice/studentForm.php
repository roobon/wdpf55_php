<?php
class Student{
    public $id;
    public $name;
    public $batch;
    public $data;

    public function __construct($x){
        $this->data = file($x);
    }

    public function result($id){
        foreach ($this->data as $line) {
            list($stId) = explode("|", $line);
            if($stId == $id){
            echo $line . "<br>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Student Info by ID</h2>
    <?php 
    if(isset($_POST["submit"])){
        $myid = $_POST['id'];
        $st = new Student("users.txt");
        $st->result($myid);
    }

    // if($_POST["submit"]){
    //     $myid = $_POST["id"];
    //     $st = new Student("users.txt");
    //     $st->result($myid);
    // }
    ?>
    <form action="" method="post">
        <input type="text" name="id"><br>
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>