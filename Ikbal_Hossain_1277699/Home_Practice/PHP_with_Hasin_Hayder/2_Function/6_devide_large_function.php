<?php 
    function doTheLargerTask (){
        echo "Step A done <br>";
        echo "Step A done <br>";
        echo "Step A done <br>";
        echo "Step A done <br>";
        echo "Step A done <br>";
    }

    doTheLargerTask();
    echo "<hr>";
?>



<h4> Divide large function into small function </h4>
<?php 
    function doTaskA(){
        echo "Step A done <br>";
    }

    function doTaskB(){
        echo "Step B done <br>";
    }

    function doTaskC(){
       echo "Step C done <br>";
    }

    function doTaskD(){
       echo "Step D done <br>";
    }
    function doTaskE(){
        echo "Step E done <br>";
    }


    function doTheLargerTask1(){
        doTaskA();
        doTaskB();
        doTaskC();
        doTaskD();
        doTaskE();
    }

    doTheLargerTask1();

    // eivabe code korle seta more manageable hobe karon kono akta function fail korle amra oi function a giye code ke debug kore solve korte parbo

?>