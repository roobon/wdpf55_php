<?php
 $recipe = "3 tablespoons Dijon mustard
 1/3 cup Caesar salad dressing
 8 ounces grilled chicken breast
 3 cups romaine lettuce";
 // convert the newlines to <br />'s.
 echo "<h1>Normal : </h1>";
 echo $recipe;
 echo "<hr>";
 echo "<h1>nl2br : </h1>";
 echo nl2br($recipe);
?>