<?php

    class myclass {
        // constructor
        function __construct()
        {
            return(true);
        }

        // method 1
        function myfunc1()
        {
            return(true);
        }

        // method 2
        function myfunc2()
        {
            return(true);
        }
    }
    echo "<h1>From class</h1>";
    $class_methods = get_class_methods('myclass');
    echo "<pre>";
    print_r($class_methods);
    echo "</pre>";
    echo "<hr>";
    // or
    echo "<h1>From object</h1>";
    echo "<pre>";
    $class_methods = get_class_methods(new myclass());
    print_r($class_methods);

?>