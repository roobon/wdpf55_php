<?php 

   $cities = ["Dhaka","Khulna", "Rajshahi", "Cumilla", "Sylet", "Chottogram"];

   $sliced = array_splice($cities , 3, -1, array("Pabna" , "Natore", "Noakhali"));

   echo "<pre>";
   print_r($cities);



?>