<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "wdpf55";

    $db = new mysqli($host, $user, $password, $database);

    if($db -> connect_error){
        die("Something problem". $db -> connect_error);
    }
    // $db -> close();


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
            $result = $db -> query($sql);
            // $row = $result -> fetch_assoc();
            // echo "<pre>";
            // print_r($row);

            while($row = $result -> fetch_assoc()){

                
                echo $row["id"] . ", ". $row["name"] . ", " . $row["address"] . ", " . $row["phone"] . "<br>";
            }

        ?>
    </body>
    </html>