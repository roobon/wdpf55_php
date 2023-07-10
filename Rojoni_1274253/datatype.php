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
        var_dump($x);//to describe a variable
        echo gettype($x);//to get the type of a variable

        echo "<br>";

        //Float Data Type
        $y = 10.5;
        var_dump($y);//to get the type of a variable
 
        echo "<br>";
       
        //Boolean Data Type
        $p = true;
        Var_dump($p);
        echo gettype($p);//to get the type of a variable
        echo "<br>";


        //String
        $student = "Masum";
        Var_dump($student);
        echo gettype($student);//to get the type of a variable
        echo "<br>";
    



        //Array Data Type

        $city = ["Dhaka","Rajshahi","Sylhet","Barisal"];
        var_dump($city);
        echo gettype($city);
        $fruits[0] = "Mango";
        $fruits[1] = "Jackfruit";
        $fruits[2] = "Orange";
        $fruits[3] = "Lichi";
        echo "<br>";
        var_dump($fruits);
        echo gettype($fruits);
        echo "<br>";


        //Object Data Type

        class student {
            public $name = "Masum";

            public $age = 20;

            public $id = 012764;

            function studentInfo (){
                $name = $this->name;
                $age = $this->age;
                $id = $this->id;

                $display = "ID" . $id . "Name" . $name . "Age" . $age ;
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