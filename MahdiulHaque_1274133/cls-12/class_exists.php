<?php 

// Create a class

class GFG {
    public $Geek_name = "Welcome to GeeksforGeeks";
}

if(class_exists('GFG')){

    // Creating an object
    $obj = new GFG;
    // Set values of $obj object
    $obj->data1 = "Geeks";
    $obj->data2 = "for";
    $obj->data3 = "Geeks";


    echo "$obj->data1 \n$obj->data2 \n$obj1->data3";
} 

    

    $vars = get_class_vars("GFG");
    print_r($vars);
  



?>