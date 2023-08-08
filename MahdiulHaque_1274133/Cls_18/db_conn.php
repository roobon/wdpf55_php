<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "wdpf_55";

    $db = new mysqli($host,$user,$password,$database);

    if($db->connect_errno){
        die("Something Problem");
    }
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
        $result = $db->query($sql);
    ?>
        <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
        <?php while($row = $result->fetch_assoc()){ ?>
        
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["phone"]?></td>
                    <td><?php  echo$row["address"]?></td>
                </tr>
            
        <?php } ?>
        </table>
    
</body>
</html>