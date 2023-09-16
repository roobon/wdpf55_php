<h4>1. Deep concept of Static Variable </h4>
<?php 
    function doSomething4(){
        static $i;  // static scope = value persist, oi value ta rekhe deoya. jotobar call kora hobe ager output ar value take se rekhe debe.

        $i = $i ?? 0;
        $i++;
        echo $i . "<br>";  // or  echo "$i <br>"; 


    }
    function doExtra(){
        static $m;  // static scope
        $m = $m ?? 0;
        echo "$m <br>";

    }
    doSomething4();
    doSomething4();
    doSomething4();

    doExtra();  // result will shows = 0
    doExtra();  // result will shows = 0

    // *** NB: jokhon akta variable ke static declare kora hoy tokhon seta sudu matro oi function er jonnoi applicable hoy.
    ?>



<h4>2. Deep concept of Static Variable </h4>

<?php 
    function doSomething1(){
        static $k;

        $k =$k ?? 0;
        $k++;
        echo $k . "<br>";

    }

    function doExtra1(){
        static $p;

        $p = $p ?? 0;
        $p++;
        echo $p . "<br>";
    }

    doSomething1();
    doSomething1();
    doSomething1();
    doSomething1();
    doExtra1();
    doExtra1();
    doSomething1();
    doExtra1();
 ?>

    
