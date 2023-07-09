<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PHP Data Type</h3>
    <?php 
    //integer Data Type

    $x = 10;
    var_dump($x); // to describle a variable
    echo gettype($x); // to get the type of variable
    echo "<br>";

    //float Data Type

    $y = 10.5;
    var_dump($y);
    echo gettype($y); // to get the type of variable
    echo "<br>";

    //Boolean Data Type

    $p = true;
    var_dump($p);
    echo gettype($p); // to get the type of variable
    echo "<br>";

    //String
    $student = "Masum";
    var_dump($student);
    echo gettype($student); // to get the type of variable
    echo "<br>";

    // Array Data Type
    $city = ["Dhaka", "Rajshahi", "Sylhet", "Barishal"];
    var_dump($city);
    echo gettype($city);
    $fruits[0] = "Mango";
    $fruits[1] = "Jacfruit";
    $fruits[2] = "Orange";
    $fruits[3] = "Lichi";
    echo "<br>";
    var_dump($fruits);
    echo gettype($fruits);
    echo "<br>";
    

    // Object Data Type

    class Student {
        public $name = "Masum";
        public $age = 26;
        public $id = 1273850;

        function studentInfo(){
            $name = $this->name;
            $age = $this->age;
            $id = $this->id;

            $display = "ID: " . $id . " " . "Name: " . $name . " " . "Age: " . $age;
            return $display;
        }
    } 
    $st = new Student;
    echo $st->studentinfo();
    echo "<br>";
    var_dump($st);
    echo gettype($st)

    ?>
</body>
</html>