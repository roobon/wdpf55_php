<?php 
    class Visitor {
        private static $visitorNumber = 0;

        function __construct(){
            self::$visitorNumber++;
        }
        function getVisitor(){
            return self:: $visitorNumber;
        }
           
        }

        new visitor;
        new visitor;
        new visitor;

        // echo $visitor->getVisitor();
        Visitor::getVisitor();
    

?>