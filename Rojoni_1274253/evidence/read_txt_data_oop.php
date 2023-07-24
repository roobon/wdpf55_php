<?php 
 class Fileclass{
      private $data;//property
      function __construct($x){//public construct function//method//$x paramiter
        $this->data = $x;
        
      }
      function readData(){
       $rawData = file( $this->data);//file function use to read data
       // print_r($rawData);?>
       <table border="1">
        <tr><th>Name</th><th>Email</th><th>Phone</th></tr>

       <?php
       foreach($rawData as $item){//item include rawdata
       // echo $item . "<br>";
       list($name,$email,$phone) = explode("|",$item);
       echo "<tr><td>Name: $name</td><td> - Email:$email</td><td> - Phone: $phone</td></tr>";
       }
       echo "</table>";
      }



 }
 $mydata = new Fileclass("users.txt");//users.txt paramiter
 $mydata->readData();

?>