<?php 
//we can sum only 3 numbers by this function
function sum($a, $b, $c){
    return $a + $b + $c;
}
echo "Sum of = " . sum(6,8,20);
?>

<?php 
//we can sum as much as we input on this function
function sumUnlimited(int ...$numbers){
    $output = 0;
    for($i=0;$i<count($numbers); $i++){
        $output += $numbers[$i];
    }
    return $output;
}
echo "Sum of = " . sumUnlimited(5,5,45);
?>