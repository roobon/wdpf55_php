<?php


class Employe {
    public $name;
    public function __set($name, $value)
    {
        echo "Nonexistent property: \$$name";
    }
}
$emp = new Employe;