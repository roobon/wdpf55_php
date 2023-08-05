<?php 
$age = array("Mizanur"=>25, "Rahman"=>27, "Ahad"=>30);
if(array_key_exists("Mizanur", $age)){ //array_key_exist searching for keys only ; in_array searchig it exist or not ; array_search search values only
    echo "Yes, exist";
}else{
    echo "Not exist";
}
?>