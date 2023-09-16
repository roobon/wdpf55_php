<?php 
    function add(int $x, int $y, int $z) :int{
        return $x + $y + $z;
    }
    
    echo "Sum of the number: " . add(5, 6, 7, 8); // 8 won't be accepted as an argument
    echo "<hr>";
?>


<?php 
    function add2(int $x = 0, int $y = 1, int $z = 2) :int{
        return $x + $y + $z;
    }
    
    echo "Sum of the number: " . add2(5, 6); // first 2 parameter;s default values will be overwritten by 5, 6 as an argument. result => 5 + 6 + 2 = 
    echo "<hr>";
?>




<?php 
    function add1(int $x, int $y, int $z) :int{
        return $x + $y + $z;
    }

    $num1 = 5;
    $num2 = 6;
    // $num3 = 7;

    $Addition = add1($num1, $num2, $num3);  // here $num3 is undefined variable
    
    echo "Sum of the number: $Addition";
    echo "<hr>";
?>



<?php 
    function sum(int $x, int $y, int $z) :int{
        return $x + $y + $z;
    }

    $num1 = 5;
    $num2 = 6;
    $num3 = 7;

    $Addition = sum($num1, $num2);
    
    echo "Sum of the number: $Addition";
    echo "<hr>";
    // fetal error: jokhon apni 3 ta parameter set korecen kintu argument dilen 2 ta tokhon fetal error dekhabe.


    // unlimited arguments has been discussed in file 5.1
?>


