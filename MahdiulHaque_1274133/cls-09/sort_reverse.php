<?php
    $number = array(12,25,35,9,46,95,6);
    sort($number);
    echo "<pre>";
    print_r($number);

    
    $result = array_reverse($number);
    echo "<pre>";
    print_r($result);
?>
<?php
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    sort($age);
    print_r($age);
?>