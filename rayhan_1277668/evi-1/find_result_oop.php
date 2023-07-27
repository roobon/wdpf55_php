<?php
     //class
     class Student{
        private $data; //property
        function __construct($x){ //constructor
            $this->data = $x;
        }
        function showresult($y){ //method
            $rowData = file($this->data);
            foreach($rowData as $line){
            list($id,$name, $batch, $result) = explode(",",$line);
            if($id == $y){
                echo "ID:$id, Neme: $name, Result:$result <br> <br>";
            }
            }
        }
     }
    $st = new student('result.txt'); //create object with paramiter
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Find Result</h3>
    <?php
        //result
        if(isset($_POST['submit'])){
           $id = $_POST["stu_id"];
            $st->showresult($id);
        }
       
    ?>
     
    <form action=""  method="post">
        <select name="stu_id" >
                <option value="">Select One</option>
                <option value="1">Mizan</option>
                <option value="2">Iqbal</option>
                <option value="3">Molla</option>
                <option value="4">Mamun</option>
                <option value="5">Sadid</option>
        </select>
<<<<<<< HEAD
        <input type="submit" name="submit" value="FIND">
    </form>
    

=======
        <input type="submit" name="submit" value="FIND" >
    </form>    
>>>>>>> dd2f499a33d7e5c8ea408aed4e150647f997119d

</body>
</html>