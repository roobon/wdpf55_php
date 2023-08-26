<?php 
    if(isset($_POST["submit"])){
        $id = $_POST["id"];
        $name = $_POST["name"];
        $degi = $_POST["degi"];
        $basic = $_POST["basic"];
        $rent = $_POST["rent"];
        $transport = $_POST["transport"];

        $totalSalary = $basic + $rent + $transport;
        echo" <p> Employee ID: $id </p>";
        echo" <p> Name: $name </p>";
        echo" <p> Total Salary: $totalSalary </p>";
    }
?>