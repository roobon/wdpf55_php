<?php 
$students = array();
$students[] = array(1277622, "Mizanur Rahman", "01768139923", 25);
$students[] = array(1366622, "Ahad Rahman", "01698739923", 26);
$students[] = array(1455622, "Rana Rahman", "01034939923", 27);

echo "<pre>";
//print_r($students) ."<br>";

foreach ($students as $student) {
    //print_r($student);
    echo "<hr>";
    foreach ($student as $info) {
        echo $info . "<br>" ;
    }
}

echo "<hr>";
echo "<hr>";
echo "<hr>";

foreach ($students as $student) {
    echo "<hr>";
    vprintf("<br> ID : %d <br> Name : %s <br> Phone : %s <br> Age : %d <br>", $student);
}
?>