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



?>