<?php


class Employe
{
    public $name;
    public $city;
    protected $wage;
    public function __get($propName)
    {
        echo "__get callback! <br>";
        $vars = array("name", "city");
        if (in_array($propName, $vars)) {
            return $this->$propName;
        } else {
            return "no Such variable";
        }
    }
}
$emp = new Employe;
echo $emp->address = "Mirpur";
var_dump($emp);
