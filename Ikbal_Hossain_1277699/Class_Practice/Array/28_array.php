<h3> Numeric Indexed array </h3>
<?php 
        $fruits = array("Mango", "Jackfruits", "Lichi", "Orange", "Apple");
        echo "Number of items in fruits array " . count($fruits) . "<hr>";
        

        echo "<pre>";
        // echo "<hr>";
        print_r($fruits);
        echo "<hr>";
        var_dump($fruits);
        echo "<hr>";
    ?>
<h3> Showing Numeric Indexed array using foreach loop </h3>
<?php 
    $ages = array("Masum"=>20, "Imran"=>21, "Mizanur"=>22, "Molla"=>23);

    $output = "";
    foreach($ages as $name =>$age){
        $output .= "Name: $name Age: $age <br>";       
    } 

    echo $output;
?>

<h3> Showing Multidimensional Array using foreach loop </h3>
<?php 
    $students = array(
        "Masum"=>array("email"=>"masumsona@gmail.com", "Phone"=>"01758-669988"),
        "Rojoni"=>array("email"=>"rojoni@gmail.com", "Phone"=>"0175-8669989"),
        "Iqbal"=>array("email"=>"iqbal@gmail.com", "Phone"=>"01758-669990"));
        
        print_r($students);
        echo "<br>";

        echo $students["Iqbal"]["Phone"];
?>
    