<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $links = array("www.prothomalo.com", "www.daraz.com.bd", "www.w3schools.com");

        foreach($links as $link){
            echo $link . "<br>";
        }
        echo "<hr>";

        foreach($links as $link){
            echo "<a href=http://" . $link . ">" . $link . "</a><br>";
        }
    ?>

    <h3> Associative Array </h3>
    <?php 
        $prices = array("Dhaka"=>200, "Khulna"=>250, "Cumilla"=>260);
        echo "<pre>";
        print_r($prices);

        echo "<ul>";
        foreach($prices as $city=>$price){
            echo "<li>" . $city . ":" . $price . "</li>";
        }
        echo "</ul>"
    ?>

    <h3> Associative Array Showing in a Table </h3>
    <?php 
        $prices = array("Dhaka"=>200, "Khulna"=>250, "Cumilla"=>260);
        echo "<pre>";
        print_r($prices);

        echo "<table border=1>";
        echo "<tr>
            <th> City </th>
            <th> Price </th>
             </tr>";

        foreach($prices as $city=>$price){
            echo "<tr>";
            echo "<td> $city </td>";
            echo "<td> $price </td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>


</body>
</html>