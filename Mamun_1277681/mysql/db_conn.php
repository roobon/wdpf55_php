<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "mamun";
$db = new mysqli ($host, $user, $password, $database);
if($db -> connect_error){
    die("something problem". $db->connect_error);
}

//echo success

// $db->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
    $sql = "SELECT * FROM users";
    $result = $db->query($sql); ?>
    <table border = "1">
    <tr>
    <th>ID</th>
    <th>ID</th>
    
    </tr>
   
    <?php
   while( $row = $result->fetch_assoc()){ ?>
<tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['name']?></td>

</tr>
<?php } ?>
   
   
     </table>
    
</body>
</html>