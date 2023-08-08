<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "wdpf55";

$db = new mysqli($host, $user, $password, $database);

if($db->connect_error)
{die("Somthings Problem".$db->connect_error);}
// echo "Success";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        table ,th, td{
            border-color: brown;
            /* border-collapse: collapse; */
        
        }
    </style>
</head>
<body>
    <?php 
    
    $sql = "SELECT *FROM users";
    $result = $db->query($sql);?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>DOB</th>
        </tr>
        <?php
    while($row = $result->fetch_assoc()){ ?>
        <!-- echo$row["id"] ." | ". $row["name"]." | " . $row["address"]. " | ". $row["phone"]. " | ". $row["dob"].  "<br>"; -->

        <tr>
            <td><?php echo$row["id"]?></td>
            <td><?php echo$row["name"]?></td>
            <td><?php echo$row["address"]?></td>
            <td><?php echo$row["phone"]?></td>
            <td><?php echo$row["dob"]?></td>
        </tr>
        



    <?php } ?>
    
    </table>
</body>
</html>