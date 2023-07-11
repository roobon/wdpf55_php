<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<pre>";
    // print_r($_SERVER);

    echo $_SERVER["HTTP_HOST"];
    echo "<br>";
    echo $_SERVER["HTTP_USER_AGENT"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    ?>

    <br>
    <a href="11_super_global.php?name=Masum&address=Mirpur&phone=+8801723-835125">Click Here</a>
    <?php
    // $_GET
    print_r($_GET);
    print_r($POST);


    // echo $_GET["name"];
    // echo "<br>";
    // echo $_GET["address"];
    // echo "<br>";
    // echo $_GET["phone"];
    echo $_GET["fname"];
    echo $_GET["lname"];

    echo
    ?>

    <form action="" method="post">
       <input type="text" name="fname"><br>
       <input type="text" name="lname"><br>
       <input type="submit" value="SUBMIT">
       
    </form>

  
</body>

</html>