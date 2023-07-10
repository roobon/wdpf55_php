<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PHP datatype</h3>
    <?php
        //intizar Data type

        $x = 10;

        var_dump($x); //to describe a variable
        echo gettype($x); //to get the type of a variable

        echo "<br>";
        echo "<br>";

        //float Datatype
        $y = 10.5;
        var_dump($y);
        echo gettype($y);

        echo "<br>";
        echo "<br>";

        //Boolean Datatype
        $p = true;
        var_dump($p);
        echo gettype($p);

        echo "<br>";
        echo "<br>";

        //string

        $student = "Iqbal";
        var_dump($student);
        echo gettype($student);

        echo "<br>";
        echo "<br>";

        //array Datatype

        $city = ["Dhaka","Barishal","Chottogram", "Madaripur","Sylhet"];
        var_dump($city);
        echo gettype($city);

        echo "<br>";
        echo "<br>";

        $fruits [0]= "Banana" ;
        $fruits [1]= "Mango" ;
        $fruits [2]= "Orange" ;
        $fruits [3]= "Jackfruits" ; 
        $fruits [4]= "Lichi" ;

        var_dump($fruits);
        echo gettype($fruits);

        echo "<br>";
        echo "<br>";

        //object Datatype

        class student {
             public $name = "Iqbal";
             public $age = 27;
             public $gender = "Male";
             public $id = "1277650";

             function studentInfo(){
                $name = $this->name;
                $age = $this->age;
                $gender = $this->gender;
                $id = $this->id;
                $display = "ID " . $id . " Name " .$name . "  Age " .$age . " Gender " .$gender;

                return $display;

             }
        } 
        $st = new student;
        echo $st->studentInfo();
        echo "<br>";
        echo "<br>";
        var_demo($st);
        echo gettype($st);

       

    ?>
</body>
</html>