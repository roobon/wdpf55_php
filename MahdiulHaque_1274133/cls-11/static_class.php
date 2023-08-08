<?php
    class Visitor{
        private static $visitorNumber = 0;
        function __construct(){
            self::$visitorNumber++;
        }
        static function getVisitors(){
            echo self::$visitorNumber;
        }
    }
    // Instantiate the Visitor class.
    new Visitor();
    new Visitor();
    new Visitor();
    Visitor::getVisitors();
   
?>