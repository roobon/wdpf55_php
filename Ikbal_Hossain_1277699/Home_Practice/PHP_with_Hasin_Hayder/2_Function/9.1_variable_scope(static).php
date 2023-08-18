<h4>1. Beginning concept of Static Variable </h4>
<?php 
    function doSomething(){
        $i = $i ?? 0;
        $i++;
        echo $i . "<br>";  // or  echo "$i <br>";

    }
    doSomething();
    doSomething();
    doSomething(); 
?>


<h4>2. Beginning concept of Static Variable </h4>
<?php 
    function doSomething1(){
        $i = $i ?? 0;
        echo $i . "<br>";  // or  echo "$i <br>";
        $i++;

    }
    doSomething1();
    doSomething1();
    doSomething1();
?>


<h4>3. concept of Static Variable </h4>
<?php 
    function doSomething2(){
        static $i;
        $i = $i ?? 0;
        $i++;
        echo $i . "<br>";  // or  echo "$i <br>"; 

    }
    doSomething2();
    doSomething2();
    doSomething2();
    ?>


<h4>4. concept of Static Variable </h4>
<?php 
    function doSomething3(){
        static $i;  // static scope = value persist, oi value ta rekhe deoya. jotobar call kora hobe ager output ar value take se rekhe debe.

        $i = $i ?? 0;
        echo $i . "<br>";  // or  echo "$i <br>"; 
        $i++;

    }
    doSomething3();
    doSomething3();
    doSomething3();
    ?>


<h4>5. concept of Static Variable </h4>
<?php 
    function doSomething4(){
        static $i;  // static scope = value persist, oi value ta rekhe deoya. jotobar call kora hobe ager output ar value take se rekhe debe.

        $i = $i ?? 0;
        echo $i . "<br>";  // or  echo "$i <br>"; 
        $i++;

    }
    echo $i;  // result = undefined variable. Output sudu matro oi function ar jonnoi hobe. ar bahire eco dile result asbe na.
    doSomething4();
    doSomething4();
    doSomething4();
    ?>

    
