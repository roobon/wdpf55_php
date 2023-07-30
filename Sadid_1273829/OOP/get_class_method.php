<?php

class myClass{
    function __construct()
    {
        return true;
    }

    function myFun1() {
        return true;
    }
    function myFun2() {
        return true;
    }
}

$methods = get_class_methods("myClass");
print_r($methods);

$obj = new myClass;
$method = get_class_methods($obj);
print_r($method);