 <?php
//  class newWindow{
//     public $var ="simple a class";
// function showDisplay(){
//     echo $this->var;
// }
//  }
//  $obj=new newWindow();
//  $obj  ->showDisplay();

 
?> 
<?php 
// class newClass{
//     public $let="Bangladesh is a Beautiful Country";
//     public const a= "American";
//     public static function sayHello (){
// echo "Hello World";
//     }
// }
// newClass::sayHello();
// echo "<br>";
// echo newClass::a;
?>
<?php 
class openClass{
     static public $var ="Bangladesh is a beautiful Country";
    const a = "Pakistan";
    public function showDisplay(){
        echo self::$var;
        echo "<br>";
        echo self::a;
        echo "<br>";
    }
}
$obj=new openClass;
$obj->showDisplay();
class newClass{
    public $let ="Karim is better than Rahim";
     public $const  ="Mango,Orange, Banana";
    public function showResult(){
        echo $this->let;
        echo "<br>";
        echo $this->const;
        
    }
}
$store=new newClass;
$store->showResult();
?> 
<?php 
class person{
    private $name="";
    private $age="";
    public function setName($name=""){
        $this->name=$name;
    }
    public function setAge($age=""){
        $this->age=$age;
    }
    
}
echo "<hr>";
?>
<?php 

// class car{
//     public $model;
//     public function __construct($model){
//             $this->model=$model;
//     }
//     public function getSuperCar(){
//         echo  " This is most famous and Expensive car ". $this->model ." in the world ";
//     }
// }
// $modelCar=new car("VOLVO");
// $modelCar->getSuperCar();
// echo "<hr>";
?>
<?php 
class car{
    public function __destruct()
    {
       echo "Bangalesh Nationalparty is BNP most populer ,";
    }
    public function sayHello(){
        echo "Masum is weak student in IDB Schoolership"."<br>";
    }
    private $pattern;
    public function __construct($pattern)
    {
    $this->pattern=$pattern;
    }
    public function getLogo(){
        echo "Motul Bike cicle is most favorite all of young".$this->pattern."This is logo is world wide famous";
    }
}
$modelCar=new car("MOTOAL");
echo "<br>";
$modelCar->getLogo();
echo "<br>";
$modelCar->sayHello();
echo "<br>";
class inform{
    public $name;
   public function __construct(){
    echo "Construct is a most powerful Buildin function";
}


//    public function __destruct()
//    {
//     echo "Dhaka is a capital city in Bangladesh";
//    }
    
   
}
$person1=new inform("Masum");
//  $person1->person();

?>