<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form</title>
</head>

<body>
    <h3 class="container text-center mt-5 bg-info text-dark">Student Information</h3>
    <div class="container">
        <form action="formData.php" target="_blank" method="post">
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="name" placeholder="Enter Your Full Name" class="form-control">
                </div>
                <div class="col">
                <input type="text" name="phone" placeholder="Enter Your Phone Number" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                </div>
                <div class="col">
                <input type="address" name="address" class="form-control" placeholder="Enter Your Address">
                </div>
            </div>

            <div>
                <textarea name="message" cols="30" rows="5" placeholder="Write Your Message" class="form-control"></textarea><br>
                <button type="submit" class="btn btn-dark">Send Message</button>
            </div>
        </form>
    </div>
    <!-- <div class="container mt-3">
    <h4>User Input Data</h4>
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
    </div> -->
</body>
</html>