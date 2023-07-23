<?php 

class Visitor {
    private static $visitorNumber = 0 ;

        function __construct()
        {
            self::$visitorNumber++ ;
        }

        function getVisitor () {
            echo self:: $visitorNumber ;
        }
}

    new Visitor ;
    new Visitor ;
    new Visitor ;
    new Visitor ;

// echo $visitor->getVisitor() ;
Visitor::getVisitor() ;


?>