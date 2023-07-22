<?php 
    $dates = array('10-10-2011', '2-17-2010', '2-16-2011',
    '1-01-2013', '10-10-2012');
    
    natsort($dates);
    echo "<pre>";
    print_r($dates);
?>