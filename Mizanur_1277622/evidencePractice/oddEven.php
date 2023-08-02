<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <form action="" method="post">
        <h2>Input Your Number</h2>
        <input type="number" name="number" class="form-control col-3"><br>
        <input type="submit" name="Check" value="Check" class="btn btn-dark text-white">
        </form>

    <h3> Result: 
        <?php 
        if(isset($_POST["Check"])){
            $num = $_POST["number"];
            if($num%2==0){
                echo "$num is a Even Number";
            }else{
                echo "$num is a Odd Number";
            }
        }
        ?>
    </h3>
    </div>



</body>
</html>