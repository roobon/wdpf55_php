<?php 
    class FileClass{
        private $data;
        function __construct($x){
            $this->data = $x;
        }
        function readData(){
            $rawdata = file($this->data);
            // echo "<pre>";
            // print_r($rawdata);
            echo "<h1>Display in normal</h1>";
            foreach ($rawdata as $item) {
                list($name, $email, $phone) = explode("|", $item);
                echo "Name : $name, Email :  $email, Phone : $phone <br>";
            }
            // output display in table
            echo "<h1>Display in table</h1>";
            echo "<table border=1>";
            echo "<tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>";
            foreach($rawdata as $item){
               list($name, $email, $phone) = explode("|", $item);
                echo "<tr>";
                echo "<td> $name </td>";
                echo "<td> $email </td>";
                echo "<td> $phone </td>";
                echo "</tr>";
            }
            echo "</table>";
            
        }
    }
    $mydata = new FileClass("users.txt");
    $mydata->readData();
        

?>