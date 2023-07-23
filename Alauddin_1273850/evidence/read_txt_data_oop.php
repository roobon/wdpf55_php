<?php 
    class FileClass {
        private $data;
        function __construct($x){
            $this->data = $x;
        }
        function readData(){
            $rawData = file($this->data);
            //print_r($rawData);?>
            <table border="2" style="background-color: bisque; width: 400px;">
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            
            <?php
            foreach($rawData as $item){
                //echo $item . "<br>";
                list($name, $email, $phone) = explode("|", $item);
                echo "<tr><td>$name</td><td>$email</td><td>$phone</td> </tr>" ;
            }
            echo "</table>";
        }
    }

    //echo "<pre>";
    $mydata = new FileClass("users.txt");
    $mydata->readData();


?>