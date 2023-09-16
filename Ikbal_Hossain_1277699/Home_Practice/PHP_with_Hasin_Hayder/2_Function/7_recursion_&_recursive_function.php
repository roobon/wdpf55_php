<h3> Segment: 01 </h3>
<!-- function name: recursive. and all activity is called recursion -->
<?php 
    // recursive function call itself.

    function printN($i){
        echo $i . "<br>";
        $i++;

        // printN($i);  // if I comment out this printN($i), this will create infinite loop 

    }

    printN(1);
    echo "<hr>";
?>



<h3> Segment: 02 </h3>
<?php 
    function printM($i){
        if($i >= 10){    // ei condition 1 theke 9 porjonto true na tai output 1 to 9 hobe. condition true holei function return kore seikhan theke ber hoye jabe. 
            return;     // break condition da dile infinity loop a pore jabe.
        }

        echo $i . "<br>";
        $i++;
        printM($i);
    }

    printM(1);
    echo "<hr>";
?>



<h3> Segment: 03 </h3>
<?php 
    function printNumber($counter, $end){
        if($counter > $end){
            return;
        }
        echo $counter . "<br>"; 
        $counter++;
        

        printNumber($counter, $end);

    }

    printNumber(21, 37);
    echo "<hr>";
?>



<h3> Segment: 04 <h4>Most Important</h4></h3>
<?php 
    function printNumber1($counter, $end, $stepping = 1){
        if($counter > $end){
            return;
        }

        echo $counter . "<br>";
        $counter += $stepping;  // alternative of $count++

        printNumber1($counter, $end, $stepping);
    }

    printNumber1(21, 37, 2);  // third arguments(2) has overwritten the default parameter of ($stepping). $counter will be incremented by the third arguments.
    echo "<hr>";
?>



