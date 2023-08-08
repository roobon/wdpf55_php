<?php 


$students = [];

$students[] = array("Masum", "masum@gmail.com", "014785626");
$students[] = array("ikbal", "ikbal@gmail.com", "014785626");
$students[] = array("Sadid", "sadid@gmail.com", "014785626");
$students[] = array("Sakib", "sakib@gmail.com", "014785626");

echo "<pre>";
print_r($students);

foreach($students as $student) {
  //print_r($student);
  echo "<hr>";
  foreach($student as $info){
    echo $info . "<br>";
  }
  
}
  echo "<hr>";

  foreach($students as $student) {
    echo "<hr>";
    vprintf("Name : %s Email: %s Phone: %s" , $student);
  }

?>