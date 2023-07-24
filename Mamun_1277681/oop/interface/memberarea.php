
$member = <?php require_once('member.class.php');

new Member("Masum", "Dhaka", "httyps://www.w3schools.com")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> This is member area! </h1>

    <h2> <?php echo $member->getUsername(). "," ?> Welcome to member area</h2>
</body>
</html>