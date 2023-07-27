<?php require_once("memberclass.php");
$member = new Member("Masum", "Dhaka", "http://www.w3schools.com")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is member area</h1>
    <h2><?php echo $member->getUsername() . " ,";  ?> Welcome to Member page</h2>
</body>
</html>