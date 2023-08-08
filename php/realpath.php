<?php 

    $path = "../Alauddin_1273850/array.php";

    echo realpath($path);
    echo "<br>";
    $path = "../../index.php";
    echo realpath($path);

    echo "<br>";    
    $path = "upload/photo.jpg";
    echo realpath($path);

?>