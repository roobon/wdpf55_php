<?php 
$result = dns_get_record("www.google.com");
echo "<pre>";
print_r($result);
?>