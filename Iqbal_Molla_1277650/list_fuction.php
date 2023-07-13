<?php
    $fruits =["Apple", "Mango", "Orange", "Banana"];
   // list($fruits1,$fruits2,$fruits3,$fruits4) =  $fruits;

   print_r($fruits);
   echo "<hr>";
   list($fruits1, $fruits2, $fruits3, $fruits4) =  $fruits;
   echo $fruits1." ". $fruits2. " ". $fruits3. " ". $fruits4;
?>
   
<?php
 echo "<hr>";
function userProfile(){
    $user[] = "Iqbal";
    $user[] = "Iqbalmolla333@gamil.com";
    $user[] = "01782158120";
   return $user;
}
list($name, $email, $phone) = userProfile();

 echo "Student name is $name, User email is $email, Phone Number is $phone";
?>