<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
</head>
<body>
<div class="container mt-3">
<h2>User Input Data</h2>
    <p>Full Name :
        <?php if(isset($_POST["name"])){
            $name = $_POST["name"];
            echo $_POST["name"];
        }?></p>
    <p>Phone Number :
        <?php if(isset($_POST["phone"])){
            $phone = $_POST["phone"];
            echo $_POST["phone"];
        }?></p>
    <p>Email :
        <?php if(isset($_POST["email"])){
            $email = $_POST["email"];
            echo $_POST["email"];
        }?></p>
    <p>Address :
        <?php if(isset($_POST["address"])){
            $address = $_POST["address"];
            echo $_POST["address"];
        }
        ?></p>
    <p>Message :
        <?php if(isset($_POST["message"])){
            $address = $_POST["message"];
            echo $_POST["message"];
        }
        ?></p>

    <p>Uploaded File:
    <?php 
        if($_FILES["upload"]){
            echo "<pre>";
            print_r($_FILES["upload"]);  //its checked for sure its working
            move_uploaded_file($_FILES["upload"]["tmp_name"], "UploadFiles/".$_FILES["upload"]["name"]);
            echo $_FILES["upload"]["name"] . " is uploaded Successfully";
        }
    ?>
    </p>
</div>
</body>
</html>