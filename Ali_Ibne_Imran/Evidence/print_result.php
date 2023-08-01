<h2>Student result search by #ID </h2>
<form action="" method="post">
    <input type="text" name="id">
    <input type="submit" name="submit" value="Search">
</form>
<?php 
    if(isset($_POST["submit"])){
        $student = $_POST["id"];
        
        $myId = new Student("result.txt");
        $myId->Result($student);
    }
?>

<?php 
    class Student{
        public $id;
        public $name;
        public $batch;
        public $data;
        function __construct($x){
            $this->data = file($x);
        }
        function Result($Id){
            foreach($this->data as $line){
              list($sid) = explode(",",$line);
                if($sid == $Id){
                     echo $line ."<br>";
                }
            }
        }
    }
    // $mydata = new Student("result.txt");
    // $mydata->Result(2);
?>