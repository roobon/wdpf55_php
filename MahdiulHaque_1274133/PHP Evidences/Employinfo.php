<?php 
 
  if(isset($_POST["submit"])){
      $id = $_POST["id"];
      $name = $_POST["name"];
      $deg = $_POST["designation"];
      $house = $_POST["house"];
      $tra = $_POST["transport"];
      $salary = $house + $tra;
  }

   echo "<p>Employee's id : $id</p>";
   echo "<p>Employee's name : $name</p>";
   echo "<p>Employee's designation : $deg</p>";
   echo "<p>Employee's houserent : $house</p>";
   echo "<p>Employee's transport : $tra</p>";
   echo "<p>Employee's salary : $salary</p>";




?>