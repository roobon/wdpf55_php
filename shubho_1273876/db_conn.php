<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "wdpf55_hello";

$db = new mysqli($host, $user, $password, $database);

if ($db->connect_error) {
    die("Error");
}
//echo "Success";
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
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Address</td>
            <td>DOB</td>
        </tr>
        <?php
        while ($row = $result->fetch_array()) { ?>

            <tr>
                <td><?php echo $row['ID'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['dob'] ?></td>
            </tr>
        <?php }
        ?>
    </table>
</body>

</html>