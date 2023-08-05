<?php 

// function isVowels($letter){
//     $vowels = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "u"];
//     return in_array($letter, $vowels);
// }
// $letterCheck = "l";
// if(isVowels($letterCheck)){
//     echo "$letterCheck is a vowel";
// }
// else{
//     echo "$letterCheck is consonant";
// }

?>
<form action="" method="post">

<input type="text" name="text" id="">
<input type="submit" name="submit" id="" value="CHECK">
</form>
<?php 

if(isset($_REQUEST['text'])){
    $letter = $_REQUEST["text"];
    $vowels = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "u"];
    $lowerLetter = strtolower($letter);
    if(in_array($lowerLetter, $vowels )){
        echo $letter ." is vowel";
    }
    else{
        echo $letter ."is consonant";
    }
}
?>