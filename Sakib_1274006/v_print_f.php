<?php 

$students = [];

$students[] = array("Masum", "masum@gmail.com", "01544787878");
$students[] = array("kasum", "kasum@gmail.com", "01744787878");
$students[] = array("Nasum", "nasum@gmail.com", "01444787878");
$students[] = array("Fasum", "fasum@gmail.com", "01944787878");

echo "<pre>";
print_r($students);

foreach($students as $students){
    // print_r($students);

    echo "<hr>";
    foreach($students as $info){
        echo $info . "<br>" ;
    }
}
echo "<hr>";

foreach($students as $students){
    echo "<hr>";
    vprintf("Name: %s Email: %s Phone: %s", $students);
    }
?>