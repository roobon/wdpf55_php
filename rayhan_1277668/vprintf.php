<?php 

// method 1

$students = [] ;

$students[] = array("masum", "masum@gmail.com" , "017744654") ;
$students[] = array("iqbal", "iqbal@gmail.com" , "017744654") ;
$students[] = array("sadid", "sadiud@gmail.com" , "017744654") ;
$students[] = array("imran", "imran@gmail.com" , "017744654") ;

echo "<pre>" ;
print_r($students) ;

echo "<hr>" ;

foreach($students as $stu){
    echo "<hr>" ;
    echo $stu ;
    

// foreach($students as $stu){
//     echo "<hr>" ;
//     foreach ($stu as $info){
//         echo $info . "<br>";
//     }
};

// method 2

echo "<hr>" ;
foreach ($students as $student){
    echo "<hr>" ;
    vprintf("Name : %s , Email: %s, Phone: %s "  , $student);
}
?>