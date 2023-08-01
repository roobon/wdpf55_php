<?php 
    $id = $_POST["id"];
    $name = $_POST["name"];
    $name = $_POST["name"];
    // $designation = $_POST["designation"];
    $basic = $_POST["basic"];
    $house = $_POST["house"];
    $transport = $_POST["transport"];
    $salary = $basic + $house + $transport;

    // echo "<h3>Employee Information</h3>";
    // echo "<p>Employee's ID : $id</p>";
    // echo "<p>Name : $name</p>";
    // echo "<p>Total Salary : $salary</p>";

?>
<?php 
    echo "<table border=1>
            <tr>
                <th>Employee's ID</th>
                <th>Name</th>
                <th>Salary</th>
            </tr>
            <tr>
                <td>$id</td>
                <td>$name</td>
                <td>$salary</td>
            </tr>
        </table>"

?>  