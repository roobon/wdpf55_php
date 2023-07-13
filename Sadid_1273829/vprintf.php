<?php
    $students = [];
    $students[]= array("Masum", "abc@gmail.com", "0123456789");
    $students[]= array("Sadid", "lmn@gmail.com", "0987654321");
    $students[]= array("Sakib", "xyz@gmail.com", "0159357852");
    $students[]= array("Iqbal", "pqr@gmail.com", "0357951751");
    echo "<pre>";
    print_r($students);

    foreach ($students as $student) {
        foreach ($student as $info) {
            echo ("$info <br>");
        }
        echo "<hr>";
    }
    // echo "<hr>";

   foreach ($students as $student) {
    echo "<hr>";
    vprintf("Name: %s, Email: %s, Phone: %s", $student);
   }

?>