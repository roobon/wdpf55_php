<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type</title>
</head>
<body>
    <?php 
        # integer data type
        $x = 10;
        echo var_dump($x)."<br>";
        echo gettype($x)."<br> <br>";
        
        #float Data Type
        $x = 10.214;
        echo var_dump($x). "<br>";
        echo gettype($x)."<br><br>";

        #boolean data type
        $x = true;
        echo var_dump($x)."<br>";
        echo gettype($x)."<br><br>";

        #string data type
        $x = "Sadid";
        echo var_dump($x)."<br>";
        echo gettype($x)."<br><br>";

        #array Data type
        $cities = ["Dhaka", "Rajshahi", "Barishal", "Khulna", "Chittagong", "Mymensingh", "Sylhet"];
        var_dump($cities). "<br>";
        echo gettype($cities). "<br>";
        $fruits[0] = "Mango";
        $fruits[1] = "Banana";
        $fruits[2] = "Orange";
        $fruits[3] = "Apple";
        var_dump($fruits). "<br>";
        echo gettype($fruits). "<br> <br>";

        #object data type
        class student{
            public $name;
            public $age;
            public $id;
        

        function studentInfo($name, $age, $id){
            $name = $this->name;
            $age = $this->age;
            $id = $this->id;
            $display = $name. " ". $age. " ". $id;
            return $display;
        }
    }
    $st = new student;
    echo $st->studentInfo("sadid",24, 2345687);
    // echo $st->studentInfo("mijan",25, 2345687);
    var_dump($st);
    echo gettype($st);
    ?>
</body>
</html>