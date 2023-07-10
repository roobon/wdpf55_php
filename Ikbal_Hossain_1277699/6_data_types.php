<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3> PHP Data Type </h3>
    <?php
    $x = 10; // Intergen Data Type
    var_dump($x); // to describe a variable
    echo gettype($x); // to get the type of a variable
    echo "<br>";

    $y = 10.5; // Flot DAta type
    var_dump($y); //to describe a variable
    echo gettype($y); // to get the type of a variable
    echo "<br>";

    $p = true; // Bolean Data Type
    var_dump($p); // to describe a variable
    echo gettype($p); // to get the type of a variable
    echo "<br>";

    $student = "Masum"; // String
    var_dump($student); // to describe a variable
    echo gettype($student); // to get the type of a variable
    echo "<br>";


    // Array Data Type
    $city = ["Dhaka", "Rajshahi", "Sylhet", "Barishal"];
    var_dump($city);
    echo gettype($city);

    $fruits[0] = "Mango";
    $fruits[1] = "Jackfruit";
    $fruits[2] = "Orange";
    $fruits[3] = "Lichi";
    echo "<br>";
    var_dump($fruits);
    echo gettype($fruits);


    // Object Data Type
    class Student
    {
        public $name = "Masum";
        public $age = 20;
        public $id = 1277699;

        function studentInfo()
        {
            $name = $this->name;
            $age = $this->age;
            $id = $this->id;
            $display = "ID " . $id . " Name " . $name . " Age " . $age;
            return $display;
        }
    }

    $st = new Student;
    echo $st->studentInfo();
    echo "<br>";
    var_dump($st);
    echo gettype($st);

    ?>
</body>

</html>