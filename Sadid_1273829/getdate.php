<?php
    $crnt = time();

    $data = getdate($crnt);

    echo "<pre>";
    print_r($data);

    echo mktime(20,35,00,1,22,2019);
?>