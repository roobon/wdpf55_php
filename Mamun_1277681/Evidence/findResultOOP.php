
<?php 
//Class 
class studentClass{
    private $data;
    function __construct($x)
    {
       $this->data = $x; 
    }
    function showResult($stid){
        $rawData=   file($this->data);
        foreach($rawData as $item){
            list($id, $name, $batch, $result, ) = explode("," , $item);
            if ($id == $stid){
                echo "ID : $id, Name: $name, Batch: $batch and Result: $result";
            }
        }
        
    }
}
$st = new studentClass("result.txt");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Check Result</h3>

    <?php 
    //result5

  if (isset( $_REQUEST['submit'])){
    //  echo  $_REQUEST['st_ID'];
    $id = $_REQUEST['st_ID'];
    $st->showResult($id);
  }
    ?>
    <form action="" method="post">
        <select name="st_ID" id="">
            <option disabled selected >Select One</option>
            <option value="1">Masum</option>
            <option value="2">Molla</option>
            <option value="3">Iqbal</option>
            <option value="4">Sadid</option>
            <option value="5">Shuvo</option>
        </select>
        <input type="submit" name="submit" id="" value="FIND">
    </form>
</body>
</html>