<?php
echo "HTTP's default port number is: ".getservbyname("http", "tcp");
?>
<?php
echo "HTTP's default port number is: ".getservbyport("80", "tcp");
?>