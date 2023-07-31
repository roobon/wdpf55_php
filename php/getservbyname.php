<?php
echo "HTTP's default port number is: ".getservbyname("https", "tcp");
?>

<?php
echo "Port 80's default service is: ".getservbyport(20, "tcp");
?>