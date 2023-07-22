<?php 


//  The natsort() function sorts an array by using a "natural order" algorithm. The values keep their original keys.

//  In a natural algorithm, the number 2 is less than the number 10. In computer sorting, 10 is less than 2, because the first number in "10" is less than 2.

   $photo = ["picture1.jpg", "picture2.jpg", "picture10.jpg", "picture20.jpg","picture100.jpg"];
   echo "<pre>";
   print_r($photo);
   sort($photo);
   print_r($photo);
   natsort($photo);
   print_r($photo);
?>