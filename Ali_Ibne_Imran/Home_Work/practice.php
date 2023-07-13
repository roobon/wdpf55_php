<?php 
    $var1 = 'Hello';
    $var2 = "World";
    echo "$var1$var2";

?>
<br>
<?php 
    echo "welcome"."to"."the"."www.isdb-bisew.org";

?>
<br>
<?php
    define("x","5");
    $x=x+10;
    echo x;
?>
<br>
<?php 
    $str="3dollars";
    $a=20;
    $a+=$str;
    print($a);
    
?>
<br>
<?php
    $test="3.5seconds";
    settype($test,"double");
    settype($test,"integer");
    settype($test,"string");
    print($test);
?>
<br>
<?php 
    echo ("35 hello 55"+65);   
?>
<br>
<?php
    $father="mother";  
    $mother="son";  
    $brother="sister";  
    echo $$father;
    
    
  
?>

