<?php 

class FileClass {
    private $data ;
    function __construct($x)
    {
        $this->data = $x ;
    }

    function readData(){
        $rawData = file($this->data) ;
        // print_r($rawData) ;
        foreach($rawData as $item){
            list($name , $email , $phone) = explode("|" , $item);

            echo "  Name: $name  -
                    Email: $email -
                    Phone: $phone <br> 
            " ;
        }
    }
}


$mydata = new FileClass("users.txt") ;
$mydata->readData() ;

?>