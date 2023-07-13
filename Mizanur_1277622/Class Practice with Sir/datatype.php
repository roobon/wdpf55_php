<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PHP Datatype</h3>
    <?php 
    // string Data type
    $a = "Mizanur Rahman";
    var_dump($a);
    echo gettype($a);
    echo "<br>";

    // integer Data type
    $x = 10;
    var_dump($x); //to get Datatype of a variable with output.
    echo gettype($x); //to get Datatype only.
    echo"<br>";

    // float Data type
    $y = 15.60;
    var_dump($y);
    echo gettype($y);
    echo"<br>";

    //boolean Data type
    $z = true;
    var_dump($z);
    echo gettype($z);
    echo"<br>";

    //Array Data type
    $city = ["Dhaka", "Narayanganj", "Barisal"]; //single line array
    var_dump($city);
    echo gettype($city);
    echo "<br>";

    $fruits[0] = "Mango";   //Multiline array with self index declaration
    $fruits[1] = "Jackfruit";
    $fruits[2] = "Litchi";
    $fruits[3] = "Orange";
    var_dump($fruits);
    echo gettype($fruits);
    echo "<br>";

    class Student {
        public $name;
        public $age;
        public $ID;

        function studentInfo(){
            $name = $this->name;
            $age = $this->age;
            $ID = $this->ID;

            $display = "ID " . $ID . " Name " . $name . " Age " . $age;
            return $display;
        }
    }
    $student = new Student;
    var_dump($student);
    echo "<br>";
    echo $student->studentInfo();
    ?>


</body>
</html>