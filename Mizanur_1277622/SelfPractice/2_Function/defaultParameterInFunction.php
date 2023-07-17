<?php 
function serve($foodType="Coffee", $numberOfItems="1 cup"){
    echo "$numberOfItems plate of $foodType has been served";
}
//$ft = "Coffee";
//$n = "5 cups";
serve("Chicken", "10"); //if we don't input any value on this function default value will be show
?>