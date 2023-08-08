<?php 
class MyClass{
    function __construct()
    {
        return true;
    }
    function myfun1()
    {
        return true;
    }
    function myfunc2()
    {
        return true;
    }
}

// $allmethod = get_class_methods("MyClass");
// print_r($allmethod);
// echo "<hr>";
// $obj = new MyClass;
// $methods = get_class_methods($obj);
// print_r($methods)
$vars = get_class_vars("MYClass");
print_r($vars)
?>