<h4> Basic function </h4>
<?php 
    function sum(int $x, int $y, int $z){
        return $x + $y + $z;
    }

    echo "Sum of the number: " . sum(5.5, 6, 7);  // result should have been 18.5 | but result will be 18 bcz of setting up int before parameter.
    echo "<hr>";
?>



<?php 
    function sum1(int $x, int $y, int $z){
        return "return value is string";
        // return $x + $y + $z;
    }

    echo "Sum of the number: " . sum1(5, 6, 7);
    echo "<hr>";
?> 



<h4> Set return type fixed </h4>
<?php 
    function Add (int $x, int $y, int $z) :int{
        // return $x + $y + $z;
        return "abdc";  // you have to set a integer as a return
    }

    $num1 = 5;
    $num2 = 6;
    $num3 = 7;

    $Addition = Add($num1, $num2, $num3);
    
    echo "Sum of the number: $Addition";
    ?>