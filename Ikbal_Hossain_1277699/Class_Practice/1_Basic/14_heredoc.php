<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $name = "Molla";
    $age = 25;
    $country = "Bangladesh";
    $content = <<<MASUM
    <p>
        A boy name is $name his age is $age and lives in $country
    </p>
    MASUM;

    echo $content;

    // The heredoc syntax allows us to create multi-line strings easily, and it simplifies the process of embedding variables within the string. The heredoc block ends automatically at the closing MASUM; line. The advantage of using heredoc over double-quoted strings is that it preserves whitespace and line breaks, making it more suitable for creating complex formatted strings without the need for additional escape sequences.
    ?>
</body>
</html>