<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $x = 10;
        var_dump($x);
        echo gettype($x);

        print "<br>";

        $y = 10.5;
        var_dump($y);
        echo gettype($y);

        print "<br>";

        $z = true;
        var_dump($z);
        echo gettype($z);

        print "<br>";
        
        $s = "Imran";
        var_dump($s);
        echo gettype($s);

        print "<br>";

        $city = ["Dhaka","Barisal","Sylhet","Khulna","Rangpur"];
        var_dump($city);
        print "<br>";
        echo gettype($city);
    ?>
    <br>
    <?php 
        class student{
            public $name = "Imran";
            public $age = 24;
            public $id = 1271579;

            function studentInfo(){
                $name = $this->name;
                $age = $this->age;
                $id = $this->id;

                $display = "ID = ".$id." , Name = ".$name." , Age = ".$age;
                return $display;
            }
        }
        
        $Student = new student;
        echo $Student->studentInfo();
        print "<br>";
        var_dump($Student);

    
    ?>
    
</body>
</html>