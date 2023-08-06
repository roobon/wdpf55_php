<?php 
$string = "Bangladesh ,pakistan,Indai maldiv Nepal";
if(preg_match("/^Bangladesh/i",$string)){
    echo "Banglades is a most population Country";
}
else{
    echo "It's a huge effect whole country";
}
echo "<hr>";
$array  =("Bangladesh"."\n"."Pakistan"."India"."/n"."Nepal"."/n");
if(preg_match("/^pakistan/i",$array)){
    echo "Pakistan is a part of Bangladesh";
}
else{
    echo "Nothing to item priting";
}
echo "<hr>";
$string = "foobar foo--bar fubar tometo";
if(preg_match("/(foo)/",$string)){
    echo "match found";
}
else{
    echo "Not found Matching";
}
echo "<hr>";
$string = "Bangladesh is a Beautiful Country has natural thinking";
if(preg_match("/\b Beautiful\b/im",$string)){
    echo "Match found";
}
else{
    echo "No match found";
}
echo "<hr>";
$string = "Pakistan is a Islamic Country";
if(preg_match("/lam\B/",$string)){
    echo "match found";
}
else{
    echo "Not match found";
}
echo "<hr>";

/*** a simple string ***/
$string = 'Masud will available at 6:00 PM';
 
/*** here we will try match the string "lab" ***/
if(preg_match ("/z\B/i", $string))
        {
    /*** if we get a match ***/
        echo "Lab is a part of word";
        }
else
        {
    /*** if no match is found ***/
        echo 'Lab is a completely Seperate Word';
        }

?>