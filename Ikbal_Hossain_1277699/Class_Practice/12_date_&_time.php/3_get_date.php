<?php 
    $current = time();

    $data = getdate($current);
    echo "<pre>";
    print_r($data);
    echo "<hr>";
?>


<?php 
    $current = 456933322;

    echo date("d-F-Y h:i:sa", $current);
    echo "<hr>";
?>



<?php 
    echo mktime(10,30,00, 01,01,2023);
    echo "<hr>";
?>



<?php  
    $current = 1672565400;

    echo date("d-F-Y h:i:sa", $current);
    echo "<hr>";
?>


<?php 
    $dob = mktime(00, 00, 00, 07, 05, 1992);
    $current = time();

    echo $diff = $current - $dob;
    echo "<br>";
    echo $diff / 60 / 60 / 24 / 365;
    echo "<br>";
?>


<?php 
    $terminationDate = new DateTime("1992-05-07");
    $todayDate = new DateTime("today");

    $span = $terminationDate -> diff($todayDate);
    echo "Year: " . $span->y . "Month: " . $span->m;
    echo "<br>" . "<br>";

    print_r($span);
    echo "<hr>";
?>