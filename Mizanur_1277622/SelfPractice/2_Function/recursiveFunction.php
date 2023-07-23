<?php 
//recursive function called itself 
//And full of this function is called recursion.

echo "Breaking condition should be select first for recursive function.";
function printN($i){
    if($i>10){
        return;
    }
    echo $i."\n";
    $i++;
    printN($i);
}
//printN(0);

function printNum($counter, $end, $stepping){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter+=$stepping;
    printNum($counter, $end, $stepping);
}
printNum(10,35,3);
?>