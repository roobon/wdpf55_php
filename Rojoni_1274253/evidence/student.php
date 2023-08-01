



<?php
class student{
    public $id;//property
    public $name;
    public $batch;
    public $data;


    public function __construct($x){//$x parameter/ater value result.txt
        $this->data = file($x);
    }

    public function result($id){
        foreach($this->data as $line){
            list($stid) = explode(",",$line);
            if($stid == $id){
            echo $line;
            }
        }

    }
}
$st = new Student('result.txt');//object
$st->result(3);
?>