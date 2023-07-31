<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$name =  $_GET['fullname']; 
$email =  $_GET['email'];
$phone = $_GET['phone'];
$address = $_GET['address'] ;

?>
    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name ?></td>
        </tr>
    </table>
    
</body>
</html>