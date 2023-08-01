<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read file with oop</title>
</head>
<body>
<?php 

class Student{
    public $id; //proparty nilam jar value nei . 
    public $name;
    public $batch;
    public $data;

    public function __construct($x){ // build in method jeta auto call hoy construct ar paramiter $x nilam

        $this->data = file($x); // this function diye proparty call korlam karon construct ar parameter ta datar moddhe store kora. .tai data ke call korlam this function diye. setake file akare rakhlam jeno array akare dekhay.
    }

    public function result($id){ // user define method jeta ami creat korbo and call korte hoy.
        foreach($this->data as $line){
            list($stid) = explode("," , $line);
        
            if ($stid == $id){

                echo $line;
            }
        }
    }
}

// $st = new Student('result.txt');
// $st->result(2);

?>

<?php 
if(isset($_REQUEST['submit'])){
   $id = $_REQUEST['id'];

$st = new Student('result.txt');
$st->result($id);
}

?>

<form action="" method = "post">
    <input type="text" name = "id"> <br>
    <input type="submit" name = "submit" value="VALUE">

</form>

</body>
</html>