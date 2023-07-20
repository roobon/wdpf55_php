<?php 
echo "Multi Dimentional Array";

$multidimentional_array = array(
    "Rajon"=> array ("email"=>"rajon@gmail.com", "education"=>"BBA"),
    "Rasel"=> array ("email"=>"rasel@gmail.com", "education"=>"MBA"),
    "Sagor"=> array ("email"=>"sagor@gmail.com", "education"=>"MBA")
);

echo "<pre>";
print_r($multidimentional_array);



?>