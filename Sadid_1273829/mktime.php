<?php
    // $dob = mktime(00,00,00,01,01,1990);
    // $crnt = time();

    // $diff = $crnt - $dob;

    // echo $diff /3600/24/365;

    $terminationDate = new DateTime("2018-05-30");
    $todayDate = new DateTime("today");
    $span = $terminationDate->diff($todayDate);

    echo "$span->y years & $span->m months"
?>