<?php 
    ini_set('display_errors', 'off');
    $a = 15;

    $example = function(){
        global $a;
        $a += 100;
        echo $a;
    };
    $example(); //calling annonymous function
    echo "<br>";
    echo $a;
   


?>

<?php 
     echo "<hr>";
     $message = 'Hi';
     $say = function() use ($message) {
        $message = 'Hello';
        echo $message;
     };

     $say();

     //echo $message


?>

<?php 
     echo "<hr>";
     $message = 'Today is Wednesday';
     $say = function() use ($message) { // &$message
        $message = 'Tomorrow is Thursday';
        echo $message. "<br>";
     };

     $say();

     echo $message;

