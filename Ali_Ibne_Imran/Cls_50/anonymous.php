<?php 
 ini_set('display_errors', 'off'); //remove display error
    $x = 15;

    $example = function(){
        global $x;
        $x += 100;
        echo $x;
    };
    $example();
    // echo $x;
?>
<hr>
<?php 
    $message = "Hello";
    $say = function()use($message){
        $message = "World";
        echo $message;
    };
    $say();
    echo $message;

?>