<?php
class SimpleClass{
    //property declearation
    public $var = 'Iqbal';
    public const Age = 26;
    
    public function displayVar(){
        echo $this->var; 
    }

    public static function sayHelloo(){
       echo '('.self::Age.')'. ", Welcome!" ;
    }
}

 $output = new simpleClass();
 $output->  displayVar();
 echo "<br>";
 $output->var = " Molla ";
 $output->displayVar();
 echo "<br>";
 echo SimpleClass :: Age; //Use the Scope regulation Oparator (::)!
 echo "<br>";
 $output->displayVar();
 echo SimpleClass ::sayHelloo(); //Static function call 
 
