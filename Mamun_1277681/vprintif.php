<?php 
$students =[];
$students[] = array("Masum", "masum@gmail.com", "9864784");
$students[] = array("Ikbal", "Ikbal@gmail.com", "9864784");
$students[] = array("Mizanur", "Mizanur@gmail.com", "9864784");
$students[] = array("Rayhan", "rayhan@gmail.com", "9864784");

echo "<pre>";
print_r($students);
foreach($students as $student){
    // print_r($student);
echo "<hr>";
    foreach($student as $info){
        echo $info ."<br>";
    }
 
}


foreach($students as $student){

    echo "<hr>";
    vprintf("name: %s Email: %s phone: %s", $student);
}
?>