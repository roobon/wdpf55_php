<?php 
    $colors = ["Red","Orange","Yellow"];
    echo "<pre>";
    print_r($colors);
    echo "</pre>";
    
    list($val1,$val2,$val3)=$colors;
    echo $val1,"<br>",$val2,"<br>",$val3;
?>
<hr>
<?php 
    function profile(){
        $user[] = "Masum";
        $user[] = "masum@gmail.com";
        $user[] = "0155684555";
        return $user;
    }
    list($name,$email,$phone) = profile();
    echo "Name : ".$name."<br>"."Email : ".$email."<br>"."Phone : ".$phone;
?>