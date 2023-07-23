<?php 
class  files {
    private $data;

    function __construct($x)
    {
        $this->data= $x;
    }
    function readData(){
      $rowData= file($this->data);
        // print_r($rowData);
        foreach($rowData as $item){
            // echo $item ."<br";
          list($name, $email, $phone) = explode("|",$item);
          echo "Name: $name email: $email phone: $phone <br>";
        }
    }
}

$newData = new files("users.txt");
$newData->readData();

?>
<?php 

class Folder{
    private $info;
    function __construct($x)
    {
      $this->info = $x;  
    }
    function readInfo(){
      $rawinfo=  file($this->info);
     ?>
     <table border="1">
        <tr><th>Name:</th> <th>Email</th> <th>Phone</th></tr>
     <?php
      foreach($rawinfo as $info){
        list ($name, $email, $phone) = explode("|", $info);
        echo "<tr><td>$name</td> <td>$email</td> <td>$phone</td> </tr>";
       
      }
      echo "</table>";
    }
}
$newFolder = new Folder("users.txt");
$newFolder-> readInfo();
?>
