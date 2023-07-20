<h3> 1 - Assigning values to variables </h3>
<?php
    $color = "red";
    $number = 12;
    $age = 12;
    $sum = $age + "15";

    echo $age + "15";
    echo "<br>";

    echo "The sum of variable age = $age + '15' =  $age + 15";
?>

<h3> 1.2 - Various ways to assign values to variables </h3>
<?php 
    $name = "Bangladesh";
    $age = 16;
    $question = "How are you?";

    echo "1_Hello Bangladesh";
    echo "<br>";

    echo "2_Hello " . "Bangladesh";
    echo "<br>";

    echo "3_Hello" . " " . "Bangladesh";
    echo "<br>";

    echo "4_Hello " .$name;
    echo "<br>";

    echo "5_Hello $name";
    echo "<br>";

    echo '6_Hello $name'; // Variable doesn't execute in single quotation // Hello $name >= single quotation will consider "string" here.
    echo "<br>";

    echo "7_Hello {$name}";
    echo "<br>";

    echo "8_Hello {$name}, {$question}"; // Looking good/
    echo "<br>";

    echo "9_Hello " . $name . ", " . $question; // Looks not fine
    echo "<br>";
?>


<h3> 1.3 - Assign value of Constant </h3>
    <?php 
    // echo "10 Value of PI = " .PI;
    define("PI", 3.14159);
    echo "10_Value of PI = {PI}". " " . PI;
    echo "<br>";

    echo "11_Value of PI = " . PI;
    echo "<br>";

    echo PI;
    echo "<br>";

    echo constant("PI");
    echo "<br>";

    $constant = "constant";
    echo "12_Value of PI = {$constant("PI")}";
 ?>


<h3> 1.4 - Details about Printing output </h3>
<?php 

    $name = "Earth";
    var_dump($name);  // Result string(5) "Earth"
    echo "<br>";

    $age = 12;
    var_dump($age);  // Result  int(12)
    echo "<br>";

    $price = 12.13;
    var_dump($price);  // Result float(12.13)
    echo "<br>";

    $age = null;
    var_dump($age);
    echo "<br>";  // Result NULL

    $age = " ";
    var_dump($age);
    echo "<br>";  // Result string(0) " "

    $name1 = "Ikbal";
    $name2 = "Hossain";
    var_dump($name1, $name2);
    echo "<br>";

    $result = true;
    var_dump($result);
    echo "<br>";


    echo "13_We're living on $name";
    echo "<br>";
    // echo 'We're lining on $name';  // We can't execute single quotation within single quotation


    echo '14_we\'re living on $name';  //  We can't execute single quotation within single quotation like ('we\'re living') but variable doesn't execute within single quotation
    echo "<br>";


    // For upper casing 
    $name =  "Earth";
    $upperName = strtoupper($name);
    echo "15_We're living on $upperName";
    echo "<br>";


    // Using of Printf
    $fname = "Ikbal";
    $lname = "Hossain";
    $degree = "BSS";
    $subject = "Economics";
    $year = 2018;
    $cgpa = 3.14;

    printf("16_My %s name is %s %s. I have completed %s in %s in %s from %s and I have gain CGPA %s.", "Full", $fname, $lname, $degree, $subject, $year, "EWU", $cgpa);

    





?>
  