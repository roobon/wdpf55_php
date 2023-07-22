<?php 

   $cities = ["Dhaka","Khulna", "Rajshahi", "Cumilla", "Sylet", "Chottogram"];

   $sliced = array_slice($cities , 2, 3);

   echo "<pre>";
   print_r($sliced);



?>