<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Numaric index arry

    $fruits = array("Mango","Jackfruit","lichy","banana","Apple");
    echo "number of item in fruits arry =" . count($fruits). "<br>";

    echo "<pre>";
    print_r($fruits);
    var_dump ($fruits);

    // Assosiative Arry

    $ages = array("Masum"=>20, "Imran"=>22, "Mizanur"=>20, "Mollah"=>20);

    foreach ($ages  as $name =>$age){
        $output .= "Name: $name Age: $age<br>";
    };

    echo $output;

    // Multidimensional Arry

    $students = array("Masum"=>array("email"=>"masum@gmail.com", "phone"=>"01754763456"),
              "Rojoni"=>array("email"=>"rojoni@gmail.com", "phone"=>"01754763456"),
              "Ikbal"=>array("email"=>"ikbal@gmail.com", "phone"=>"01754763456"));
              
              print_r($students);
    
        echo "<hr>";
        echo $students["Ikbal"]["phone"];
    
    ?>
</body>
</html>
