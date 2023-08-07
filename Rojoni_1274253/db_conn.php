<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "wdpf55";

$db = new mysqli($host,$user,$password,$database);

if($db->connect_error)
  {die("Something problem".$db->connect_error);}
 //echo "Success";


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
    $result = $db->query($sql);?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>DOB</th>
        </tr>
   <?php 
    while($row = $result->fetch_assoc()){  
       // print_r($row);
        ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['dob'] ?></td>
    </tr>
          
   <?php } ?>
   </table>
     <!-- echo "<pre>";
     print_r($row);
  -->
    
</body>
</html>