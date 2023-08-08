<?php 
   
   $filepath = "result.txt";
  $fh = fopen($filepath,'r');
   
   echo fgets($fh);
   
   fclose($fh);