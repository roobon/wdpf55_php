<?php 

class Students{
    function __construct()
    {
        echo "My Name is ". get_class($this)."<br>";
    }
}
$st = new Students();
echo "Newly Created from this class " . get_class($st)
?>