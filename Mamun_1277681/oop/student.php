<?php 

class Student {
//   public  $id;
//   public  $name;
//   public  $batch;
  public $data;
  public function __construct($x)
  {
    $this->data =file($x);
  }
  function result($id){
    foreach($this->data as $item){
       list ($stid, $name, $batch) = explode(",", $item);
       if($stid==$id){
        echo $item;
       }
    }

  }

}
// $st = new Student ("result.txt");
// $st->result(4)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Student Result</h2>

    <?php 
    if(isset($_REQUEST['submit'])){
      $myID =   $_REQUEST['id'];
        $st = new Student('result.txt');
        $st->result($myID);

    }
    ?>
    <form action="" method="post">
        <input type="text" name="id" id=""> <br>
        <input type="submit" name="submit" id="" value="RESULT">
    </form>
</body>
</html>