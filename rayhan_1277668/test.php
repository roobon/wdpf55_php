<?php 

 $op2 = "blabla";              
function foo($op1) {       
 echo $op1;        
 global $op2;    
 echo $op2 ;
}     
foo("hello");    


?>


