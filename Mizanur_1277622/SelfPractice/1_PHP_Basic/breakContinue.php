<?php 
echo "Use of break \n";
for($i=0;$i<10;$i++){
    echo $i;
    echo PHP_EOL;

    if($i==6){
        break; //break means loop will stop here if condition fullfill.
    }
}
echo "Use of continue \n";

for($i=10;$i<20;$i++){
    if($i<15){
        continue; //continue run form this condition
    }
    echo $i;
    echo PHP_EOL;
}
?>