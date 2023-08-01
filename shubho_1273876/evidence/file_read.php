<?php

class Student
{
    public $id;
    public $name;
    public $batch;
    public $data;

    public function __construct($x)
    {
        $this->data = file($x);
    }
    public function result($id)
    {
        foreach ($this->data as $line) {
            list($stid) = explode(",", $line);
            if (trim($stid) === $id) {
                echo $line;
                return;
            }
        }
        echo "No result found for ID: " . $id;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>

    <h2>Student Result</h2>
    <?php
    if (isset($_POST['submit'])) {
        $myid = $_POST['id'];
        $st = new Student('result.txt');
        $st->result("$myid");
    }

    ?>
    <form action="" method="post">
        <input type="text" name="id">
        <input type="submit" value="result" name="submit">
    </form>
</body>


</html>