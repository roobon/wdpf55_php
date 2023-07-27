<?php 
    class FileClass {
        private $data;
        function __construct($x){
            $this-> data = $x;
        }
        function readData(){
            $rawData = file($this->data);
?>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
    <?php
            foreach($rawData as $line){
                echo $line. "<br>";

                list($name,$email,$phone) = explode("|", $line);
                echo "<tr><td> $name </td><td>$email</td><td>$phone</td></tr> <br>";
            }
            echo "</table>";
        }
    }

         $mydata = new FileClass("users.txt");
         $mydata->readData();