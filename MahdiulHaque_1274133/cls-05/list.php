<?php 


    $colors = ["Green" , "Orange" , "Yellow"];

    print_r($colors);
    echo "<hr>";

    list($val1, $val2, $val3) = $colors;

    echo $val1,   $val2,   $val3;


?>

<?php 
     function userProfile(){
        $user[] = "Masum";
        $user[] = "masum@gmail.com";
        $user[] = "01254789341";
        return $user;

     }
          
     list($name, $email, $phone) = userProfile();
  
    echo "Students name is $name and his email is $email and Phone $phone";



?>