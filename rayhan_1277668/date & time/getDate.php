<?php 
$current = time() ;

$data = getdate($current) ;

echo "<pre>" ;
print_r($data) ;

echo date( "d-F-Y h:i:sa", $current ) ;

?>