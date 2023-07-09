<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PHP Data Type</h3>
    <?php 
    // inter Data type
    $x = 10;
    var_dump($x) ;//to describe a variable
    echo gettype($x); // to get the type of a variable
    echo "<br>";
  //float Data Type
    $y = 3.5;
    var_dump($y);
    echo gettype($y);
    echo ("<br>");
    //Booleans Data ype
    $p = true;

$city = ["Dhaka","Faridpur","comilla","Nohakhile","Barisal","sylhet"];
var_dump($city);
echo gettype($city);
$fruits [0] = "Mango";
$fruits [1]="jackfruit";
$fruits [2] = "Ornage";
$fruits [3] = "Lichi";
echo "<br>";
var_dump($fruits);
echo gettype($fruits);

//Object Data type
class student {
   public $name = "Masum";
   public $age  =20;
   public $id = 2536412;
   function studentInfo(){
$name  =$this->name;
$age = $this ->age;
$id = $this ->id;
$display = "ID".$id. "Name" .$name. "Age" .$age;  
return $display; }
}
$st  = new student;
echo $st ->studentInfo();
echo "<br>";
var_dump($st);
echo gettype($st)
    ?>
</body>
</html>