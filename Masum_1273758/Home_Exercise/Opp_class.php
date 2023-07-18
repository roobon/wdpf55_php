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
?>
