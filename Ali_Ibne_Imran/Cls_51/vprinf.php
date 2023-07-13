<?php 
    $customers = [];
    $customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
    $customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
    $customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");
    echo "<pre>";
    print_r($customers);
    echo "<hr>";
    foreach ($customers AS $customer) {
     vprintf("<p>Name: %s<br>E-mail: %s<br>Phone: %s</p>", $customer);
    }

    //loop in loop
    // echo "<hr>";
    // foreach ($customers AS $customer) {
    //     foreach($customer as $info){
    //         echo $info."<br>";
    //     } echo "<hr>";
    //    }
?>