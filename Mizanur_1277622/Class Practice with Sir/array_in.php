<?php 
$inputNumPublic = 50;
$numbers = array(1,2,3,4,5,6,7,8,9);
if(in_array($inputNumPublic, $numbers)){ //in_array searchig it exist or not : array_key_exist searching for keys only 
    echo "This number is available & Your input number is $inputNumPublic";
}else{
    echo "This number is unavailable & Your input number is $inputNumPublic";
}
?>