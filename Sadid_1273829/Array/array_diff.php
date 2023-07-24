<?php
    $arr1 = ["OH", "CA", "NY", "HI", "CT", "Cumilla", "Noakhali"];
    $arr2 = ["OH", "CA", "NY", "HI", "CT", "Cumilla", "Noakhali", "Barishal"];
    $arr3 = ["OH", "CA", "NY", "HI", "CT", "Cumilla", "Noakhali", "Dhaka"];

    $array = array_diff($arr2, $arr1, $arr3);
    print_r($array);
?>