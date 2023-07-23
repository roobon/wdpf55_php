<?php

class Visitors {
    private static $visitorNumber = 0;


    function __construct()
    {
        self::$visitorNumber++;
    }

    static function getVisitors(){
        echo self::$visitorNumber;
    }
}

new Visitors;
new Visitors;
new Visitors;


// echo $visitor->getVisitors();
Visitors::getVisitors();