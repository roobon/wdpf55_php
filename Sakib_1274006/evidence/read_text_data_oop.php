<?php 

class FileClass{

    private $data;
    function __construct($x){
        $this -> data = $x;
    }
    function readData(){
        $rawData = file($this ->data);
        // print_r($this ->data);
        foreach($rawData as $item){
            // echo $item . "<br>";
            list($name, $email, $phone) = explode("|" , $item);
        }
    }


}

$mydata = new FileClass("users.txt");
$mydata->readData();

?>