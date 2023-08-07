<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "wdpf_55";


$DB =  new mysqli($host, $user, $password, $database);

if ($DB->connect_error) {
    die("Connection failed....!" . $DB->connect_error);
}
echo " Conntected succeccfully. ";


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

    $sql =  "SELECT * FROM user1";
    $result = $DB->query($sql);    ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            // print_r($row) ;
        ?>
            <tr>
                <td> <?php echo  $row['id']  ?> </td>
                <td> <?php  echo $row ['name']   ?> </td>
                <td> <?php echo $row ['phone']  ?> </td>
                <td> <?php  echo $row ['email'] ?> </td>
                <td> <?php   echo $row ['address'] ?> </td>
                <td> <?php echo $row ['dob']  ?> </td>

            </tr>



            
           
        <?php } ?>

    </table>
    <!-- echo "<pre>" ;
  echo "<br>" ;
  print_r($row) ; -->



</body>

</html>