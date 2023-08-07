<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $course = $_POST["languages"];
        $hobbie = $_POST["hobbies"];

        echo "Name : " . $name;
        echo "<br>";
        echo "Email : " . $email;
        echo "<br>";
        // foreach ($course as $cour) {
        //     echo $cour . " , ";
        // }
        //print_r($course);

        $cours = implode(" , ", $course);
        echo "Selected Courses - " . $cours . "<br>";

        $hobbi = implode(" , ", $hobbie);
        echo "Hobbies are - " . $hobbi;

    }
    ?>

    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    <input type="text" name="name" placeholder="Enter Your Name"><br>
    <input type="text" name="email" placeholder="Enter Your Email"><br>
        <select name="languages[]" multiple>
            <option value="csharp">C#</option>
            <option value="javascript">JavaScript</option>
            <option value="perl">Perl</option>
            <option value="php" selected>PHP</option>
        </select><br>
        Cricket <input type="checkbox" name="hobbies[]" value="Cricket">
        Football <input type="checkbox" name="hobbies[]" value="Football">
        Tennis <input type="checkbox" name="hobbies[]" value="Tennis">
        Vollyball <input type="checkbox" name="hobbies[]" value="Vollyball"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>