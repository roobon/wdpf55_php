<?php
    function display($n){
        if ($n<=10) {
            echo $n . "<br>";
            display($n + 1);
        }
    }
    display(1);
?>