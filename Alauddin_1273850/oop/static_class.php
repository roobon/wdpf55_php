<?php 

    class Visitor {
        private static $visitors = 0;
        function __construct(){
            self::$visitors++;
        }
        function getVisitor(){
            echo self::$visitors;
        }
    }

    new Visitor;
    new Visitor;
    new Visitor;
    new Visitor;
    //$visitor = new Visitor;
   //echo $visitor->getVisitor();
   Visitor::getVisitor();



?>