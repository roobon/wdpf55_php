
<h4>1. Basic Function using local scope </h4>
<?php 

    // scope = variable ar value kotokkhon porjonto valid, kothay valid and kon jaygay change kora jabe.

    function doSomething(){
        $name = "Earth";  // local scope
        echo $name;
    }

    doSomething();
?>



<h4>2. Problem of local scope in a function </h4>
<?php 
    function doSomething4(){
        $name = "Earth";
    }

    doSomething4();
    echo $name;
?>




<h4>3. Problem of local scope in a function </h4>
<?php 
     $name = "Earth";
    function doSomething1(){
       
        echo $name;  // result => Undefined variable: name bcz the variable $name = "Earth" is defined out of function not within function.
    }

    doSomething1();
?>




<h4>4. Basic Function with global scope </h4>

<?php  // 3 & 4 has been solved here
     $name = "Earth";  // global scope
    function doSomething2(){
        global $name;  // global use korar karone php function ar bahire ei variable ke khujbe je ok declare kora hoyece kina. as this is true so it will give a valid output.
       
        echo $name; 
    }

    doSomething2();
?>




<h4>5. How to use Super Global in function </h4>
<?php // 3 & 4 can be solved this way also

     $name = "Earth";
    function doSomething3(){

        echo $GLOBALS["name"];  // super global. aderke alada kore global bole declare korar dorkara hoy na.
        // this is a good practice using like this.
    }

    doSomething3();
?>


<h4>5. How to use Super Global in function </h4>
