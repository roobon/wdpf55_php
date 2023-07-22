<?php 
$student=array("name"=>"Kamrul Hasan Masum","age"=>25,"address"=>"Dhaka,Bangladesh","country"=>"Canada");
extract($student);
echo "Name:$name Age:$age Address: $address Country Form:$country";
echo "<hr>";
$student=array("Kamrul Hasan Masum",25,"Dhaka Bangladesh","Canada");
extract($student,EXTR_PREFIX_ALL,"a");
echo "Name: $a_0 ,Age:$a_1 Address:$a_2, Country: $a_3"."<br>";
echo "<hr>";
$student =[
    ["name"=>"Khayrul Alam Rayan","age"=>25],
    ["name"=>"Masum Alam","age"=>30,],
    ["name"=>"Nadia sultana","age"=>30]
];

foreach($student as $singleArray){
foreach ($singleArray as $key=>$value){
    echo $key.":".$value."<br>";
}

}
echo "<hr>";
$student =[
    ["name"=>"Khayrul Alam Rayan","age"=>25],
    ["name"=>"Masum Alam","age"=>30,],
    ["name"=>"Nadia sultana","age"=>30]
];
foreach($student as $singleArray);
extract($singleArray);
echo "Name:$name Age:$age";
echo "<hr>";
$student=[
    ["Al Mahmud Hasan",25],
    ["Kamrul Hasan Mia",30],
    ["khayrul Alam Rayan",40],
];
foreach ($student as list($key,$value)){
    echo $key.":".$value."<br>";
}
echo "<hr>";
$furits=["a"=>"Apple","b"=>"Banana","c"=>"Mango"];
 extract($furits);
 echo $a;
 echo "<br>";

 echo $b;
 echo "<br>";
 echo $c;
 echo "<hr>";
 $names=["Masum","Rayan","Kamrul","Hasan","Nadia","Sultana"];
 extract($names, EXTR_PREFIX_ALL ,"a");
 echo $a_0;
 echo "<br>";
 echo $a_1;
 echo "<br>";
 echo $a_2;
 echo "<br>";
 echo $a_3;
 echo "<br>";
 echo $a_4;
 echo "<hr>";
 $number=range(10,20);
 echo "<pre>";
 print_r($number);
 $numbers=range(20,10);
 print_r($numbers);
 echo "<hr>";
 $letter=range("a","n");
 print_r($letter);
 echo "<br>";
 $letters = range("t","a");
 print_r($letters);





 




?>
