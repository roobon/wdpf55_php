<h4> Unlimited arguments sets </h4>
<?php 
    function sum(int ...$numbers) :int {   // here ...$numbers means unlimited arguments accept & $numbers indicates an Array
       
        $result = 0;

        for($i = 0; $i < count($numbers); $i++){
            $result += $numbers[$i];
        }

        return $result;
        
    }

    echo "Sum of the numbers: " . sum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    echo "<hr>";
    ?>




    <?php 
    function sum1($x, $y, int ...$numbers) :int {   // here the output will show only the summation of (3 to 10) = 52; bcz 
       
        $result = 0;

        for($i = 0; $i < count($numbers); $i++){
            $result += $numbers[$i];
        }

        return $result;  // result variable considers only ...$numbers parameter from the arguments (3 to 10) only bcz (1->$x and 2->$y) didn't call here 
        
    }

    echo "Sum of the numbers: " . sum1(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    echo "<hr>";
?>



<?php 
    function sum2($x, $y, int ...$numbers) :int {   
       
        $result = 0;

        for($i = 0; $i < count($numbers); $i++){
            $result += $numbers[$i];
        }

        return $result;  // result will be = 0 here. karon $x, $y parameter er arguments 1, 2 deoya ace. kintu function return only for ...$numbers arguments but sei arguments gula input deoya nai tai loop a kono value add hocce na. tai sudu $result = 0, aitai output dibe. $result = 5 hole setai output dito.
        
    }

    // echo "Sum of the numbers: " . sum2(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    echo "Sum of the numbers: " . sum2(1, 2);
    echo "<hr>";
?>



<?php 
    function sum3($x, $y, int ...$numbers)  {  // ...$numbers er por r kono parameter add kora jabe na
        echo "Summation of $x and $y is: " . ($x + $y) . "<br>";  // eikhane output 1 + 2 = 3 asbe. then $result er output show korbe.
       
        $result = 0;

        for($i = 0; $i < count($numbers); $i++){
            $result += $numbers[$i];
        }

        return $result;  // result will be = 0 here. karon $x, $y parameter er arguments 1, 2 deoya ace. kintu function return only for ...$numbers arguments but sei arguments gula input deoya nai tai loop a kono value add hocce na. tai sudu $result = 0, aitai output dibe. $result = 5 hole setai output dito.
        
    }

    echo "Sum of the numbers: " . sum3(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    
    echo "<hr>";
?>
