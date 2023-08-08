<?php
class Student{
    public $id;
    public $name;
    public $batch;
    public $data;

    public function __construct($x){
        $this->data = file($x);
    }

    public function result($id){
        foreach ($this->data as $line) {
            list($stId) = explode("|", $line);
            if($stId == $id){
            echo $line . "<br>";
            }
        }
    }
}
$st = new Student("users.txt");
$st->result(2);
?>