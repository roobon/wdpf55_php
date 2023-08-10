<?php 
//include_once("EmployeeData.html");

if(isset($_POST["submit"])){
$id = $_POST["id"];
$name = $_POST["name"];
$basic = $_POST["basic"];
$house = $_POST["house"];
$trans = $_POST["trans"];

$sum = $basic + $house +$trans;
echo "Employee ID is : " . $id;
echo "<br>";
echo "Employee Name is : " . $name;
echo "<br>";
echo "Total Salary is : " . $sum ;
}
?>