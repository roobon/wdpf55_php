<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <title>Vowel/Consonant Checker</title>
    </head>
</head>

<body>
    <h1>Vowel/Consonant Checker</h1>


    <form action="" method="post">
        <label for="text">Enter some text:</label>
        <input type="text" name="text" id="text" required>
        <input type="submit" value="Check">
    </form>


    <?php
    function isVowel($char)
    {
        $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
        return in_array($char, $vowels);
    }

    function isConsonant($char)
    {
        return !isVowel($char) && preg_match('/[a-zA-Z]/', $char);
    }

    if (isset($_POST['text'])) {
        $inputText = $_POST['text'];
        $textLength = strlen($inputText);

        echo "<p>Result:</p>";
        echo "<ul>";
        for ($i = 0; $i < $textLength; $i++) {
            $char = $inputText[$i];
            if (isVowel($char)) {
                echo "<li>$char is a vowel.</li>";
            } else if (isConsonant($char)) {
                echo "<li>$char is a consonant.</li>";
            } else {
                echo "<li>$char is neither a vowel nor a consonant.</li>";
            }
        }
        echo "</ul>";
    }
    ?>
    <?php
    if (isset($_POST['text'])) {
        $inputText = $_POST['text'];
        $textLength = strlen($inputText);

        echo "<p>Result:</p>";
        echo "<ul>";
        for ($i = 0; $i < $textLength; $i++) {
            $char = strtolower($inputText[$i]);

            if (ctype_alpha($char)) {
                if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
                    echo "<li>$char is a vowel.</li>";
                } else {
                    echo "<li>$char is a consonant.</li>";
                }
            } else {
                echo "<li>$char is neither a vowel nor a consonant.</li>";
            }
        }
        echo "</ul>";
    }
    ?>



</body>

</html>