<?php 
echo "<pre>";
$array = array("a","b","c","d","e","f");
print_r($array);
echo "<hr>";
$array = array("2"=>"Mango","3"=>"Orange","4"=>"Apple");
print_r($array);
echo "<hr>";
$array =array("a"=>"Apple","b"=>"Ornage","c"=>"Jackfruit");
print_r($array);
echo "<hr>";
$array = array("Apple","Ornage","A"=>"Toyota","B"=>"BMW");
print_r($array);
echo "<hr>";
$array = array("Apple","Jackfruit","A"=>"Bangladehs","B"=>"Pakistan");
echo $array[1];
echo "<br>";
echo $array["B"];
echo "<hr>";
$arr = array("Apple","Orange","Jackfruit","Bangladesh","450","Paksitan","850");
foreach($arr as $key){
    echo $key."<br>";}
    echo "<hr>";
    echo "<pre>";
    $arr = array("Apple","Orange","Jackfruit","Bangladesh"=>"450","Paksitan"=>"850");
    foreach($arr as $key=> $value){
        echo $key.":".$value."<br>";
}
echo "<hr>";
$arr =array("A"=>"Bangladesh","B"=>"Canada","C"=>"Pakistan");
foreach($arr as $key=>$value){
    echo "$key=$value"."<br>";
    
}
echo "<hr>";
    $array = array("name"=>"Rayan thalukdhar","age"=>"25","address"=>"Canada","Phone"=>"01920737782");
    while(list($key,$value) = each($array)){
        echo " $key : $value " . "<b>";
    }
    echo "<hr>";
    $student = ["name"=>"Masum", "age"=>"20","Email"=>"masum55549@gmail.com","ID"=>"1273758","Session"=>"2022_2023"];
   
    // while(list($index,$value) = each($student)){
    //     echo "$index:$value"."<br>";
    // }
    extract($student);
    echo " Name:$name  Age:$age  Email:$Email  ID:$ID  session:$Session  ";
    echo "<hr>";
    $array = array("Karim alamgir",60, "Arbia,nazran");
    extract($array,EXTR_PREFIX_ALL,"a");{
        echo "Name:a$_0 Age:$a_1 Address:$a_2";
    }
//Nested Array//
$Array =[
["name"=>"MD MASHUM HOSSIN", "Age"=>"30"]



]

?>