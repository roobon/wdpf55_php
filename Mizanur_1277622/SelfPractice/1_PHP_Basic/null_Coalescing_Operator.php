<?php 
echo "null coalescing operator works like ternary operator: \n";
$MyNum = 15;
$userInput =50;
if(isset($userInput)){
    $output = $userInput;
}else{
    $output = $MyNum;
}
$output = $userInput ?? $MyNum;  //if $userInput has value it will show other wise default value will show + if we put both value it will show userInput value.
echo $output;
?>