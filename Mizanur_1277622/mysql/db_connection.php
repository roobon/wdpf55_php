<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "wdpf_55";

$db = new mysqli($host, $user, $password, $database);
if ($db->connect_error) {
    die("Something Problem" . $db->connect_error);
} else {
    //echo "Success";
}
//$db->close();
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
    //$row = $result->fetch_array();
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>PHONE</th>
            <th>DATE OF BIRTH</th>
            <th>EMAIL</th>
        </tr>
    <?php
    while ($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row["id"]?></td>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["address"]?></td>
            <td><?php echo $row["phone"]?></td>
            <td><?php echo $row["dob"]?></td>
            <td><?php echo $row["email"]?></td>
        </tr>
        <?php
        //echo $row['id'] . " " . $row['name'] . "<br>";
    }
    // echo "<pre>";
    // print_r($row);
    ?>
    </table>
</body>

</html>