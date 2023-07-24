<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit']) && isset($_POST['st_id'])) {
        echo $_POST['st_id'];
    }
    ?>
    <form action="" method="post">
        <select name="st_id" id="">
            <option value="1">Masum</option>
            <option value="2">Molla</option>
            <option value="3">Ikbal</option>
            <option value="4">Raihan</option>
            <option value="5">Shubho</option>
        </select>
        <input type="submit" name="submit" value="FIND">
    </form>
</body>

</html>