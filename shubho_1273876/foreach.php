<?php

$prices = array("Dhaka" => 200, "Khulna" => 250, "Barishal" => 300);
echo "<pre>";

echo "<table border=''>";
echo "
    <tr>
        <th>city</th>
        <th>PRICE</th>
    </tr>";
foreach ($prices as $city => $price) {
    echo "<tr>";
    echo "<td>  $city  </td>";
    echo "<td>  $price  </td>";
    echo "</tr>";
}
echo "</table>";
