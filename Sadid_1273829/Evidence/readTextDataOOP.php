<?php

class FileClass{
    private $data; // property

    function __construct($x)
    {
        $this->data = $x;
    }

    function readData(){
        $rawData = file($this->data);
        // print_r($rawData);
        foreach ($rawData as $value) {
            list($name, $email, $phone) = explode("|",$value);
            echo "Name : $name, Email : $email, phone number : $phone <br><br>";
        }
    }
}
$myData = new FileClass("users.txt");
$myData->readData();

// $srting = "we love bangladesh";
// $x = explode(" ",$srting);
// print_r($x)
?>
