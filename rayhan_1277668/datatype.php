<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $student = "Masum" ;
        var_dump($student)

    ?>

    <br>
    <br>

    <li>
    <!-- ===== array ===== -->
    <?php 
    $city = ["dhaka" , " chittagong" , " rajshahi" , " khulna"] ;

    var_dump($city);  
    echo " <br>" ;
    echo gettype($city);
    ?>
    </li>
    <br>
    <br>

    <!-- ======= object ======= -->

    <?php 
    
    class Student {
        public $name = "Masum";
        public $age = 20;
        public $id = 1541320;

        function studentsInfo(){
            $name = $this -> name;
            $age = $this -> age;
            $id = $this -> id;

            $display = " ID "  . $id  . " Name " . $name . " Age " . $age;
            return $display ;
        }
    }

    $st = new Student;
    echo $st -> studentsInfo();
    echo "<br>";
    var_dump($st) ;
    
    ?>


</body>
</html>