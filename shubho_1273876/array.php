<?php


$ages = array("Masum" => 23, "Imran" => 25, "Mizanur" => 22, "Molla" => 27);
echo "<pre>";

echo "<table border='' w>";
echo "
    <tr>
        <th>Name</th>
        <th>Age</th>
    </tr>";
foreach ($ages as $name => $ages) {
    echo "<tr>";
    echo "<td>  $name  </td>";
    echo "<td>  $ages  </td>";
    echo "</tr>";
}
echo "</table>";


$Students = array(
    "Masum" => array("email" => "abc@gmail.com", "phone" => "01798537135"),
    "Rojoni" => array("email" => "xyz@gmail.com", "phone" => "01911457963"),
    "Iqbal" => array("email" => "pqr@gmail.com", "phone" => "01521323367")
);


echo $Students["Iqbal"]["phone"];
