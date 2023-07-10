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
    // Integer Data Type

     $x = 10;
     var_dump($x); // to describe a variable
     echo gettype($x); //get the type of variable

     // Float Data Type

     $y = 10.5;
     echo "<br/>";
     var_dump($y);
     echo gettype($y);

     //Boolean Data type

     $p = true;
     echo "<br/>";
     var_dump($p);
     echo gettype($p);

     //string
     $student = "Masum";
     echo "<br/>";
     var_dump($student);
     echo gettype($student);

     //Array Data type
     $city = ["Dhaka", "Rajshahi", "Sylhet"];
     echo "<br/>";
     var_dump($city);
     echo "<br/>";
     echo gettype($city);

     $fruits[0] = "Apple";
     $fruits[1] = "Apple";
     $fruits[2] = "Apple";
     echo "<br/>";
     var_dump($fruits);
     echo "<br/>";
     echo gettype($fruits);

     //Object data type

     class student {
        public $name = "Masum";

        public $age = 26;
        public $ID = 1274055;

        function studentInfo(){
            $name = $this->name;
            $age = $this->age;
            $ID = $this->ID;
            
            $display = "ID ". $ID . " Name " . $name . " Age " . $age;
            return $display;
        }

     }

     $st = new student;
     var_dump($st);
     echo "<br/>";
     echo gettype($st);


    ?>
</body>
</html>