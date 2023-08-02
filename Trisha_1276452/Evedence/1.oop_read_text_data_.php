<?php 
class FileClass{
   private $data;

    //construtor 
    function __construct($x){
        $this->data = $x;
    }
    function readData(){
        $rawData = file($this->data);
        // print_r($rawData);

          
        ?>

        <table border="1">
            <tr><th>Name</th><th>Email</th><th>Phone</th></tr>

        <?php 
        

        foreach($rawData as $item){
            // echo $item ."<br>";
            list ($name ,$email,$phone) = explode("|",$item);
            echo "<tr><td>Name: $name </td><td>- Email: $email</td><td> - phone: $phone</td></tr>";

        }
        echo "</table>";
    }
    }

    $mydata = new FileClass("users.txt");
    $mydata->readData();


