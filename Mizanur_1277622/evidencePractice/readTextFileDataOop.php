<?php 
class FileClass {
    private $data;
    function __construct($x){
        $this->data =$x;
    }
    function readData(){
        $rawData = file($this->data);
        //print_r($rawData);
        
        // foreach ($rawData as $text) {
        //     echo $text . "<br>";
        // }

        foreach($rawData as $text){
            //echo $text . "<br>";
            list($name, $email, $phone) = explode("|", $text);
            echo "Name: $name, Email: $email, Phone: $phone<br>";
        }

    }
}

$myData = new FileClass("users.txt");
$myData->readData();
?>